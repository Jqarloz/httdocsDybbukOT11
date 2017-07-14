var countdown = function(end, elements, callback){
					var _second = 1000,
						_minute = _second*60,
						_hour = _minute*60,
						_day = _hour * 24,
						
						end = new Date(end),
						timer, 
						calculate = function(){
							var now = new Date(),
							remaining = end.getTime() - now.getTime(),
							data;
							if(isNaN(end)){
								console.log('invalido date/time');
								return;
							}
							
						if(remaining <= 0){
							clearInterval(timer);
							
							if(typeof callback === 'function'){
								callback();
							}
						}else{
							if(!timer){
								timer = setInterval(calculate, _second);
							}
							
							data = {
								'days': Math.floor(remaining / _day),
								'hours': Math.floor((remaining % _day)/ _hour),
								'min': Math.floor((remaining % _hour)/ _minute),
								'sec': Math.floor((remaining % _minute) / _second),
							}
							
							console.log(data);
							
							document.getElementById('days').textContent = data.days;
							document.getElementById('hours').textContent = data.hours;
							document.getElementById('min').textContent = data.min;
							document.getElementById('sec').textContent = data.sec;
							
							if(elements.lenght){
								for(x in elements){
									var x = elements[x];
									data[x]= ('00' + data[x]).slice(-2);
									document.getElementById(x).innerHTML = data[x];
								}
							}
						}
						
						};
				
				calculate();
				}