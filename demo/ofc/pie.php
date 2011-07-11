<?php
include 'ofc/open-flash-chart.php';

$title = new title( 'test' );
$label=array('apple','dell','hp','ibm');
$value=array(3,5,7,10);
for($i=0;$i<count($label);$i++)
{
	$list[]=new pie_value($value[$i], $label[$i]);
}
//print_r($tmp);die();
//for($i=1;$i<=3;$i++)
//{
//	$list[]=new pie_value($i,"apple");
//}

$pie = new pie();
$pie->set_start_angle( 40 );
$pie->set_animate( true );
$pie->set_tooltip( '#val# of #total#<br>#percent# of 100%' );
//$pie->set_values( array(2,3,new pie_value(6.5, "hello (6.5)")) );
//$pie->set_values(array(new pie_value(2,'ie'),new pie_value(3, 'firefox'),new pie_value(5, 'opera')));
$pie->set_values($list);
$pie->set_colours(array('#FF0000','#00FF00','#0000FF','#356aa0'));
$chart = new open_flash_chart();
$chart->set_title( $title );
$chart->add_element( $pie );

$chart->x_axis = null;

echo $chart->toPrettyString();
//$title = new title( 'Pork Pie, Mmmmm' );
//
//$d = array();
//$d[] = 2;        // <-- blue
//$d[] = 3;        // <-- grey
//$d[] = 4;        // <-- green
//$tmp = new pie_value(6.5, "");
////
//// this slice would normally be light green
//// but we are overriding the colour here:
////
//$tmp->set_colour( '#FF33C9' );
//$tmp->set_label('BIG', '#FF653F', 24 );
//$d[] = $tmp;
////
//// here the colour cycle wraps and this gets the
//// first colour:
////
//$d[] = new pie_value(6.5, "6.5");    // <-- blue
//$d[] = 3;        // <-- grey
//$d[] = 4;        // <-- green
//$d[] = 2;        // <-- light green
//
//$pie = new pie();
//$pie->start_angle(35)
//    ->add_animation( new pie_fade() )
//    ->add_animation( new pie_bounce(4) )
//    // ->label_colour('#432BAF') // <-- uncomment to see all labels set to blue
//    ->gradient_fill()
//    ->tooltip( '#val# of #total#<br>#percent# of 100%' )
//    ->colours(
//        array(
//            '#1F8FA1',    // <-- blue
//            '#848484',    // <-- grey
//            '#CACFBE',    // <-- green
//            '#DEF799'    // <-- light green
//        ) );
//
//$pie->set_values( $d );
//
//$chart = new open_flash_chart();
//$chart->set_title( $title );
//$chart->add_element( $pie );
//
//echo $chart->toPrettyString();