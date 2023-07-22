<?php

namespace App\Controller;

use App\Entity\DataPoint;
use App\Repository\DataPointRepository;
use App\Entity\Indicator;
use App\Repository\IndicatorRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class VizController extends AbstractController
{
    public function getColor($str): string
    {
        return '#'.substr(md5($str), 0, 6);
    }

    public function createChart(
        string $outcome,
        IndicatorRepository $indicatorRepository,
        ManagerRegistry $doctrine,
        ChartBuilderInterface $chartBuilder
    ): array 
    {
        $entityManager = $doctrine->getManager();

        $indicators = $indicatorRepository->findByOutcome($outcome);

        $labels = [];
        $datasets = [];

        // Create a dataset for each indicator
        foreach ($indicators as $indicator) {
            $data = [];

            $dataPoints = $indicator->getDataPoints()->getValues();

            foreach ($dataPoints as $dataPoint) {
                $year = $dataPoint->getYear();
                $value = $dataPoint->getValue();

                if (!in_array($year, $labels)) {
                    array_push($labels, $year);
                }
                
                $data[$year] = $value;
            }

            $dataset = [
                'label' => $indicator->getDescription(),
                'backgroundColor' => $this->getColor($indicator->getCode()),
                'borderColor' => $this->getColor($indicator->getCode()),
                'data' => $data
            ];

            array_push($datasets, $dataset);
        }

        sort($labels);

        // Chart
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);

        $chart->setData([
            'labels' => $labels,
            'datasets' => $datasets,
        ]);

        $chart->setOptions([
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => ucfirst($outcome)
                ]
            ],
        ]);

        return [$chart, $datasets];
    }

    #[Route("/proj", name: "viz_start")]
    public function vizStart(
        IndicatorRepository $indicatorRepository,
        ManagerRegistry $doctrine,
        ChartBuilderInterface $chartBuilder
    ): Response
    {
        $arr1 = $this->createChart("negative", $indicatorRepository, $doctrine, $chartBuilder);

        $negativeChart = $arr1[0];
        $positiveChart = $this->createChart("positive", $indicatorRepository, $doctrine, $chartBuilder)[0];

        return $this->render('viz/start.html.twig', [
            "negativeChart" => $negativeChart,
            "positiveChart" => $positiveChart,
            // "dataPoints" => $dataPoints->getValues()
            "test" => $arr1[1]
        ]);
    }

    #[Route("/proj/about", name: "viz_about")]
    public function vizAbout(): Response
    {
        return $this->render('viz/about.html.twig');
    }

    #[Route("/proj/definitions", name: "viz_def")]
    public function vizDef(
        IndicatorRepository $indicatorRepository,
        ManagerRegistry $doctrine,): Response
    {
        $indicators = $indicatorRepository->findAll();

        return $this->render('viz/definitions.html.twig', [
            "indicators" => $indicators
        ]);
    }
}