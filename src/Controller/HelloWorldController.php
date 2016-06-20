<?php
/**
 * @file
 * Contains \Drupal\hello_world\HelloWorldController.
 */
 
namespace Drupal\hello_world\Controller;

/**
 * Provides route responses for the hello world page example.
 */
class HelloWorldController {
  /**
   * Returns a simple hello world page.
   *
   * @return array
   *   A very simple renderable array is returned.
   */
  public function myCallbackMethod() {
    
	$content = '
		<div class="myDiv">
		<div class="bg"></div>
        <div class="block-title">A basic Drupal page created programmatically, Hello World</div>
	';
	
	$x = 1;
	// Declare a new object called $my_object and per
	// https://drupal.org/node/1817878 you need to reset to
	// the global namespace by prefacing stdClass() with \stdClass()
	$my_object = new \stdClass();
	$my_object->first_name = 'Jimbo';
	$my_object->last_name = 'Bob';
	$content .= 'Hello ' . $my_object->first_name . '
	' . $my_object->last_name . '</br>';
	foreach($my_object as $property) {
		$content .= 'property ' . $x . ' in the object is :
		'. $property . '</br>';
		$x = $x + 1;
	}
	
	$content .= '
      
        Some random text to show off this transparent background ....
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nisi purus, gravida sit amet molestie et, facilisis vel nulla.
        Mauris f        aucibus augue eu quam feugiat at lacinia velit malesuada. Sed bibendum faucibus mattis. Maecenas quis ligula nibh,
        sit amet iaculis metus. Aenean lobortis massa ut nulla tristique eu vestibulum leo eleifend. Maecenas arcu lectus, facilisis in
        mattis sed, pretium et metus. Phasellus elementum, elit fringilla mollis sollicitudin, ipsum odio vestibulum quam, vitae
        tristique odio tortor eu augue. Pellentesque volutpat placerat neque, sit amet vehicula lectus commodo vitae. Aliquam nec
        mauris pharetra velit tincidunt consectetur. Aliquam vitae lectus nisi. Curabitur mi sapien, ultrices quis bibendum eu,
        ultricies eget libero. Donec mollis malesuada est a varius. Vestibulum dignissim venenatis nisl, nec semper massa tincidunt
        egestas. Maecenas a erat sem.

        Vestibulum semper eleifend eros at semper. Phasellus neque augue, eleifend ut congue pharetra, sagittis in neque. Duis sit
        amet es et risus sodales vulputate sed ut sapien. Vestibulum consequat est lobortis ligula aliquam ac sodales ante sodales. Fusce dict        um tortor ut est vehicula sit amet imperdiet dolor consequat. Maecenas nec risus sed quam accumsan vestibulum id ac urna. 
        Suspendisse suscipit dictum dolor condimentum rutrum. Duis augue sem, mattis vel tincidunt ut, interdum in mauris. In
        quis feugiat ipsum. Donec euismod massa et tortor rhoncus lacinia. Nunc felis ligula, tincidunt eu viverra at, auctor quis magna.  

        Nullam sapien augue, venenatis sit amet ornare et, blandit nec velit. Morbi eu ligula a lacus commodo lacinia vel et neque.
        Sed at nisi at sapien adipiscing accumsan in fringilla ligula. Nunc fringilla, est vel ullamcorper tincidunt, tellus ligula
        lobortis turpis, vel gravida purus lacus a dui. Quisque et massa vestibulum nisi dictum lacinia vehicula ac nisi. Nulla facilisi.
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sed neque ante, venenatis
        sagittis dui. Cras lorem ipsum, scelerisque tempor aliquet quis, imperdiet in augue. Curabitur tellus est, ultrices eu sagittis
        et, pellentesque id enim. Nunc lobortis mattis viverra. Sed non purus ipsum. Aenean ac justo sed urna eleifend consequat.
    </div>';
    $element = array(
        '#markup' => 'Saying Hello World in Drupal 8 is cool!' . $content,
        '#attached' => array(
            'library' => array(
                'hello_world/hello-world',
            ),
        ),
    );
    return $element;
  }
}
