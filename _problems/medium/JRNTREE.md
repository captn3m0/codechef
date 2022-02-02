---
{"category_name":"medium","problem_code":"JRNTREE","problem_name":"TreeLand Journey","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"3-07-2016","tags":{"0":"xcwgf666"},"time":{"view_start_date":1468063200,"submit_start_date":1468063200,"visible_start_date":1468063200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/mandarin/JRNTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/russian/JRNTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL16/vietnamese/JRNTREE.pdf">Vietnamese</a> as well.</h3>
<p>Sergey recently got back from his TreeLand journey.</p>
<p>As you might have probably guessed, TreeLand is a country located far to the east from ByteLand, the country he lives in. As you might have also probably guessed, it is called TreeLand, because historically the road system of the country forms a tree. So, there are <b>N</b> cities in the country and <b>N-1</b> bidirectional roads, connecting them. The cities are numbered from <b>1</b> to <b>N</b>. Of course, it is possible to get from any city of the country to any other city via these roads.</p>
<p>Not long ago, a new King came to the throne in TreeLand. The first thing he had done was re-organizing the road system of the country. It was considered that cities with more than <b>8</b> adjacent roads might cause disruption in the road system, because of the high traffic load. So now, every city in TreeLand is directly connected with no more than <b>8</b> cities.</p>
<p>Usually, when Sergey travels to the country, he visits all its cities. So now he visited all the <b>N</b> cities of TreeLand. Any time he <i>first</i> visited a city, he wrote its number in his notebook. Eventually, there was a sequence of <b>N</b> integers in the notebook.</p>
<p>But what Sergey didn't know was that it was rainy season in TreeLand, and he was not prepared for it. Sadly, his notebook got wet, and the records became obscure.</p>
<p>Sergey wants to tell his friends about the journey, and so he wants to restore the order in which he visited the cities. He has partially restored his records: for some cities he is certain about when he visited them. He is also certain that he did not wander around wasting his time: he started from some city, visited all the cities and got back to the starting city, and did all this by travelling along the minimum possible number of roads (If he travelled along some road multiple times, it's counted multiple times).</p>
<p>Sergey found a map of the road system of TreeLand. After seeing it, he realized that generally there is more than one way to accomplish his trip. So now he is interested in the number of ways to complete the trip so that it doesn't contradict his records.</p>
<p>Please help him to calculate this number. Since it can be large, output it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of cities in TreeLand.</p>
<p>The second line contains <b>N</b> space-separated integer numbers. Let's denote the <b>i</b><sup>th</sup> of them by <b>A<sub>i</sub></b>. If <b>A<sub>i</sub></b> is <b>0</b>, then Sergey is not certain about the number of the city that was the <b>i</b><sup>th</sup> in his records. Otherwise, <B>A<sub>i</sub></b> denotes the number of the <b>i</b><sup>th</sup> city in Sergey's records.</p>
<p>Each of the following <b>N-1</b> lines contains two space-separated integers, <b>X<sub>j</sub> Y<sub>j</sub></b>, denoting a road in TreeLand.</p>
<h3>Output</h3>
<p>Output the total number of possible trips Sergey could have done, which do not contradict the restored records. Since this number can be large, output it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b> ≤ <b>N</b></li>
<li>Every city is directly connected with no more than <b>8</b> other cities.</li>
<li>The road system forms a tree.</li>
<li>There is at least <b>1</b> legal way to restore the trip.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5
1 0 0 0 0
1 2
1 3
3 4
3 5</tt>

<b>Output:</b>
<tt>4</tt>
</pre><h3>Explanation</h3>
<p>Sergey could have obtained the following sequences:</p>
<ul>
<li><tt>1 2 3 4 5</tt>: 1 -> 2 -> 1 -> 3 -> 4 -> 3 -> 5 -> 3 -> 1.</li>
<li><tt>1 2 3 5 4</tt>: 1 -> 2 -> 1 -> 3 -> 5 -> 3 -> 4 -> 3 -> 1.</li>
<li><tt>1 3 4 5 2</tt>: 1 -> 3 -> 4 -> 3 -> 5 -> 3 -> 1 -> 2 -> 1.</li>
<li><tt>1 3 5 4 2</tt>: 1 -> 3 -> 5 -> 3 -> 4 -> 3 -> 1 -> 2 -> 1.</li>
</ul>

<p>Here, all the trips have a length of <b>8</b> roads. No other trip has length less than or equal to <b>8</b> roads.</p>
