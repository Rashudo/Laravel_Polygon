<?php

declare(strict_types=1);

namespace App\SolidPrinciples\I;

use App\SolidPrinciples\I\Example\CarTransformer;
use App\SolidPrinciples\I\Example\SuperTransformer;

/**
 * Class IModel
 * @package App\SolidPrinciples\I
 */
class IModel
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'Принцип разделения интерфейса (Interface Segregation Principle)';
    }

    /**
     * @return string
     */
    public static function getDescription(): string
    {
        return '
        <b>Нельзя заставлять клиента реализовать интерфейс, которым он не пользуется.</b><br />

        Это означает, что нужно разбивать интерфейсы на более мелкие, лучше удовлетворяющие конкретным потребностям клиентов.';
    }

    /**
     * @return array
     */
    public function run(): array
    {
        $superTransformer = new SuperTransformer(
        ); // Класс который реализует три метода интерфейса SuperTransformerInterface
        $carTransformer = new CarTransformer(
        ); //Неправильно заставлять этот класс реализовывать интерфейс SuperTransformerInterface
        //потому что там будут пустые методы:
        //    public function toPlane();
        //    public function toShip();
        //Это нарушает четвертый принцип solId
        //Вместо этого надо разбить SuperTransformerInterface на более мелкие интерфейсы.
        return ['Смотри ' . __NAMESPACE__];
    }
}
