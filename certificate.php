<div ng-init="certficate=[{name:'1',caption:'NPTEL Python'},{name:'2',caption:'Cisco Python'},{name:'3',caption:'Spoken Tutorial C++'},{name:'4',caption:'Spoken Tutorial Python'},{name:'5',caption:'FullStack Web Devlopment'},{name:'6',caption:'Adv.FullStack Web Devlopment'},{name:'7',caption:'Spoken Tutorial Adv. C++'}]">
	<h2>Certificates</h2><br>
	<div ng-repeat="x in certficate" class="col-md-4">
		<figure>
		<a id='a1' href="Images/certificate/{{x.name}}.jpg" target="_blank"><img src="Images/certificate/{{x.name}}.jpg" width="304" height="236" style="border:1px solid brown;" class="img-rounded img-thumbnail" id='m1'>
		<figcaption style="font-weight: bold;background-color: white">{{x.caption}}</figcaption></a><br>
		</figure>
	</div>
</div>