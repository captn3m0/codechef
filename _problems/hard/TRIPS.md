---
{"category_name":"hard","problem_code":"TRIPS","problem_name":"Children Trips","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"shangjingbo","date_added":"4-08-2014","tags":{"0":"lca","1":"medium","2":"oct14","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TRIPS","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/TRIPS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/TRIPS.pdf">Russian</a>.</h3>
<p>There's a new trend among Bytelandian schools. The "Byteland Touristic Bureau" has developed a new project for the high-schoolers. The project is so-called "Children's Trips".</p>
<p>The project itself is very simple: there are some touristic routes in Byteland, and <b>N</b> touristic campuses (numbered from <b>1</b> to <b>N</b>). For the sake of economy, there are exactly <b>N-1</b> road between them. Of course, even having this given, it is possible to travel from any touristic campus to any other one. Moreover, for the sake of safety, each road is no longer than <b>2</b> kilometers.</p>
<p>When some student wants to travel, he first chooses his starting campus - he is been delivered there (say) by a helicopter. He chooses his final destination campus as well. From his final destination, he will be transported to his home by (say) a helicopter, again. So that pupil won't travel any extra distance by foot. When the start and the finish are chosen and the pupil is delivered, he starts his moving by the only route. None of pupils is infinitely strong, so first the pupil looks at the map of the touristic routes, and then he chooses the furthest campus on his way that he can reach during the current day (by safety regulations, it is strictly prohibited to sleep not at the campus because there can be a little trouble with werewolves), and moves there. Then the new day begins, and it repeats till the moment when the destination is reached.</p>
<p>Of course, not all the students created equal. Somebody is good in math, somebody in English, somebody in PE. So it's quite natural that all high-schoolers has different strengths.<br />
We call the strength is the maximal number of kilometers that the pupil can pass in a day. And now you're given a lot of queries from the children. For every query, you are given the starting campus, the final campus and the strength. You are requested to calculate the number of days for every trip. The map of the campuses and the distances between them will be given to you as well.</p>
<h3>Input</h3>
<p>The first line of input contains the integer <b>N</b>, denoting the number of campuses.</p>
<p>The next <b>N-1</b> lines contain triples of the form <b>X Y D</b> with the meaning that there is a road between the <b>X</b>-th and the <b>Y</b>-th campus with the length <b>D</b> kilometers.</p>
<p>Then there is a line with a single integer <b>M</b>, denoting the number of queries.</p>
<p>Then, there are <b>M</b> lines with the triples of the form <b>S F P</b> with the meaning that the trip starts at the campus <b>S</b>, ends at the campus <b>F</b> and the student has the strength of <b>P</b>.</p>
<h3>Output</h3>
<p>For every query, please output the number of days on a separate line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>X, Y, S, F</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>2</b></li>
<li><b>2</b> ≤ <b>P</b> ≤ <b>2*N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 1
2 3 2 
1 4 2
4 5 1
5
1 5 3
1 3 2
2 5 4
1 2 10
4 5 2

<b>Output:</b>
1
2
1
1
1
</pre>
