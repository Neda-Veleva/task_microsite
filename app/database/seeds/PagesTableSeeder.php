<?php

class PagesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $pages = array(
                ['title' => 'Home Page',
                'content' => 'Home Page Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Curabitur feugiat massa sit amet quam finibus eleifend. Proin et felis vitae mauris feugiat'
                . ' tempor non at lacus. Sed dictum felis id eros vulputate, quis commodo nunc dapibus. '
                . 'Nullam nec ex scelerisque, egestas libero at, efficitur erat. Suspendisse id mauris ornare, '
                . 'porta massa et, faucibus nunc. Donec iaculis varius ligula scelerisque ultricies. '
                . 'Morbi dolor purus, malesuada et semper ut, faucibus malesuada est. Suspendisse non pharetra '
                . 'ligula, vitae tincidunt massa. Curabitur quis eros commodo, tristique tortor ut, tincidunt '
                . 'enim. Vestibulum libero nibh, volutpat a lorem sed, posuere egestas massa. Nam scelerisque '
                . 'lectus vel nisl venenatis, at mollis mi scelerisque. In hac habitasse platea dictumst. '
                . 'Nulla mollis neque eget est commodo, eu lobortis lorem tempor. Quisque accumsan dapibus '
                . 'dolor in hendrerit. Nullam scelerisque dictum orci eget facilisis. Cras fermentum nibh id '
                . 'magna condimentum, in aliquam nisi cursus. Quisque ut lectus ut elit laoreet pellentesque '
                . 'sed porta metus. Duis efficitur tellus ac bibendum semper. Vivamus id quam risus. '
                . 'Aenean non magna tempor, facilisis magna sed, volutpat enim. Duis sed ligula cursus, s'
                . 'ollicitudin felis ut, tempus ex. Curabitur rhoncus gravida nibh, eu lacinia risus sodales id. '
                . 'Fusce venenatis enim id interdum molestie. Mauris vitae orci faucibus, consectetur leo sit '
                . 'amet, finibus enim. Praesent vestibulum convallis lacus, accumsan egestas erat aliquet eu.'
                . ' Duis a lacinia lectus. Mauris nec lacinia velit, vitae euismod leo. Morbi sit amet fringilla '
                . 'lacus. Sed vitae pretium turpis. In iaculis consectetur velit ut sodales. Phasellus elementum,'
                . ' sem ut blandit congue, neque quam ullamcorper purus, vitae pretium felis nulla vitae odio. '
                . 'Cras suscipit quis mi eget mollis. Mauris efficitur est vel lorem venenatis semper. '
                . 'Sed venenatis blandit eleifend. Ut elementum aliquet mi ac pulvinar. Nulla consectetur ex in '
                . 'nibh rutrum scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada '
                . 'fames ac turpis egestas. Duis est mi, posuere sit amet ullamcorper ut, mollis non justo. '
                . 'Vestibulum commodo lacus ultrices sapien viverra, eget dapibus augue blandit. Nunc rutrum '
                . 'velit non nunc dapibus iaculis. Sed ut suscipit lacus. Nam volutpat nisi at pretium vehicula.',
                'slug' => 'home-page'],
                ['title' => 'Infornation Page',
                'content' => 'Infornation Page Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Curabitur feugiat massa sit amet quam finibus eleifend. Proin et felis vitae mauris feugiat'
                . ' tempor non at lacus. Sed dictum felis id eros vulputate, quis commodo nunc dapibus. '
                . 'Nullam nec ex scelerisque, egestas libero at, efficitur erat. Suspendisse id mauris ornare, '
                . 'porta massa et, faucibus nunc. Donec iaculis varius ligula scelerisque ultricies. '
                . 'Morbi dolor purus, malesuada et semper ut, faucibus malesuada est. Suspendisse non pharetra '
                . 'ligula, vitae tincidunt massa. Curabitur quis eros commodo, tristique tortor ut, tincidunt '
                . 'enim. Vestibulum libero nibh, volutpat a lorem sed, posuere egestas massa. Nam scelerisque '
                . 'lectus vel nisl venenatis, at mollis mi scelerisque. In hac habitasse platea dictumst. '
                . 'Nulla mollis neque eget est commodo, eu lobortis lorem tempor. Quisque accumsan dapibus '
                . 'dolor in hendrerit. Nullam scelerisque dictum orci eget facilisis. Cras fermentum nibh id '
                . 'magna condimentum, in aliquam nisi cursus. Quisque ut lectus ut elit laoreet pellentesque '
                . 'sed porta metus. Duis efficitur tellus ac bibendum semper. Vivamus id quam risus. '
                . 'Aenean non magna tempor, facilisis magna sed, volutpat enim. Duis sed ligula cursus, s'
                . 'ollicitudin felis ut, tempus ex. Curabitur rhoncus gravida nibh, eu lacinia risus sodales id. '
                . 'Fusce venenatis enim id interdum molestie. Mauris vitae orci faucibus, consectetur leo sit '
                . 'amet, finibus enim. Praesent vestibulum convallis lacus, accumsan egestas erat aliquet eu.'
                . ' Duis a lacinia lectus. Mauris nec lacinia velit, vitae euismod leo. Morbi sit amet fringilla '
                . 'lacus. Sed vitae pretium turpis. In iaculis consectetur velit ut sodales. Phasellus elementum,'
                . ' sem ut blandit congue, neque quam ullamcorper purus, vitae pretium felis nulla vitae odio. '
                . 'Cras suscipit quis mi eget mollis. Mauris efficitur est vel lorem venenatis semper. '
                . 'Sed venenatis blandit eleifend. Ut elementum aliquet mi ac pulvinar. Nulla consectetur ex in '
                . 'nibh rutrum scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada '
                . 'fames ac turpis egestas. Duis est mi, posuere sit amet ullamcorper ut, mollis non justo. '
                . 'Vestibulum commodo lacus ultrices sapien viverra, eget dapibus augue blandit. Nunc rutrum '
                . 'velit non nunc dapibus iaculis. Sed ut suscipit lacus. Nam volutpat nisi at pretium vehicula.',
                'slug' => 'information-page'],
                ['title' => 'Inquiry Page',
                'content' => 'Inquiry Page Content Lorem ipsum dolor sit amet, consectetur adipiscing elit. '
                . 'Curabitur feugiat massa sit amet quam finibus eleifend. Proin et felis vitae mauris feugiat'
                . ' tempor non at lacus. Sed dictum felis id eros vulputate, quis commodo nunc dapibus. '
                . 'Nullam nec ex scelerisque, egestas libero at, efficitur erat. Suspendisse id mauris ornare, '
                . 'porta massa et, faucibus nunc. Donec iaculis varius ligula scelerisque ultricies. '
                . 'Morbi dolor purus, malesuada et semper ut, faucibus malesuada est. Suspendisse non pharetra '
                . 'ligula, vitae tincidunt massa. Curabitur quis eros commodo, tristique tortor ut, tincidunt '
                . 'enim. ',
                'slug' => 'inquiry-page'],
            );
            
            DB::table('pages')->insert($pages);
	}

}
