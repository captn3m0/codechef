---
{"category_name":"challenge","problem_code":"BYTEFOOD","problem_name":"Food Shortage in Byteland","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":1.45,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1249546937,"submit_start_date":1249546937,"visible_start_date":1249546937,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><P align=justify>
Fanatics from the BBFO blew up all the food factories in the Bytelandian capital! Hurry up! There is still some food left in shops. Some shops are located in the centre, others in the suburbs, so Johnny has to decide which of them are worth visiting. Some shops can be very big and have plenty of food in them, others may be so small that food dissappears from them at an alarming rate... So? Help Johnny buy as much food as possible. 
<br><br>
There are <i>n</i> open shops, each of them located at position (<i>x<sub>i</sub></i>,<i>y<sub>i</sub></i>), for <i>i</i>=1,...,<i>n</i>, where 0 <= <i>x<sub>i</sub></i>,<i>y<sub>i</sub></i> <= 250. The distances between shops are measured using the Manhattan metric (i.e. as sums of absolute values of differences of x and y coordinates). Besides, every shop is characterized by a linear time function describing how much food is left in the shop at the moment:</p>
<p align=center><center><i>f<sub>i</sub></i> = <b>max</b>{0, <i>a<sub>i</sub></i> - <i>b<sub>i</sub></i> * <i>time</i>}</center></p><p align=justify>where 0 <= <i>a<sub>i</sub></i> <= 1000000, 0 <= <i>b<sub>i</sub></i> <= 1000, while <i>time</i> is the time (in minutes) that has elapsed from the moment Johnny left the house (assume that Johnny does not live in the same place as any shop). If Johnny decides to stay in a shop, he can buy at most <i>b<sub>i</sub></i> units of food per minute. Otherwise, he can move along the ortogonal system of streets of the city at a constant speed of unit distance per minute. Johnny only ever changes the action he is performing at the full minute. Because his family is slowly beginning to starve, he should be back at home not later than <i>m</i> minutes after he left. 
Since there are thousands of starving families in the capital, Johnny can't spent more that 1 <= <i>c<sub>i</sub></i> <= 10 minutes in a shop. Moreover, he will never go into the same shop twice for fear of being lynched...</p>
<H3>Input</h3>
<P align=justify>
The first line of input contains a single positive integer <i>t</i> <= 1000, the number of test cases.

Each test case begins with the number of shops in the city 1 <= <i>n</i> <= 1000 and the deadline 1 <= <i>m</i> <= 5000.

Then the following <i>n</i> lines consist of four integers <i>x<sub>i</sub> y<sub>i</sub> a<sub>i</sub> b<sub>i</sub> c<sub>i</sub></i> each, describing the position and the parameters of the function for food availability of the <i>i</i>-th shop. At the end of every test case comes a line with two integers<i>p q</i> (between 0 and 250), corresponding to the x and y coordinates of the position of Johnny's house.
<br><br>All the input data are integers.
</p>
<H3>Output</h3>
<P align=justify>
Process all test cases. The correct output for the <i>i</i>-th test case takes the following form:
<br><i>i</i>	[the number of the test case, in the input order]
<br><i>s m</i> [<i>s</i> is the number of the target shop and <i>m</i> > 0 is the number of minutes spent in it]. 
<br>At the end of the series of moves you should always write a line conisting of two zeros ('0 0').
<br><br>All the output data should be integers.
</p>
<H3>Scoring</h3>
<P align=justify>
The score of your program is the total amount of food that Johnny bought (summed over all the testcases in which he managed to come back home before the deadline).
</p>
<H3>Example</h3>
<P align=justify>
<pre>
<b>Input</b>
4
2 20
0 0 100 5 5
10 0 200 10 10
5 0
2 20
0 0 180 15 10
10 0 200 20 10
5 0
4 101
0 0 1000 20 5
20 0 200 1 5
0 20 5000 200 5
20 20 300 5 10
10 10
1 15
1 0 10 1 5
5 0

<b>Output</b>
1
2 10
0 0
2
1 10
0 0
3
3 5
4 10
2 1
0 0
4
1 5
0 0

<b>Score</b>
Score = 1261
</pre>
</p> 