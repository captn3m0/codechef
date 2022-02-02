---
{"category_name":"easy","problem_code":"TOURISTS","problem_name":"Tourists in Mancunia","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"satyaki3794","problem_tester":null,"date_added":"4-01-2017","tags":{"0":"easy","1":"eulerian","2":"graph","3":"jan17","4":"satyaki3794"},"editorial_url":"https://discuss.codechef.com/problems/TOURISTS","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/TOURISTS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/TOURISTS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/TOURISTS.pdf">Vietnamese</a> as well.</h3>

<p>The grand kingdom of Mancunia is famous for its tourist attractions and visitors flock to it throughout the year. King Mancunian is the benevolent ruler of the prosperous country whose main source of revenue is, of course, tourism.
</p>
<p>
The country can be represented by a network of <b>unidirectional</b> roads between the cities. But Mancunian, our benign monarch, has a headache. The road network of the country is not <b>tourist-friendly</b> and this is affecting revenue. To increase the GDP of the nation, he wants to redirect some of the roads to make the road network <b>tourist-friendly</b> and hence, ensure happiness and prosperity for his loyal subjects.
</p>

<p>
Now is the time for some formal definitions. :(
</p>

<p>
A road network is said to be <b>tourist-friendly</b> if for every city in the country, if a tourist starts his journey there, there is a path she can take to visit each and every city of the nation and traverse each road <b>exactly once</b> before ending up at the city where she started.
</p>


<p>
Given a description of the road network of Mancunia, can you come up with a scheme to redirect some (possibly none) of the roads to make it <b>tourist-friendly</b>?
</p>


<h3>Input</h3>
<p>The first line contains two integers <b>N</b> and <b>E</b> denoting the number of cities and roads in the beautiful country of Mancunia respectively.</p>
<p>Each of the next <b>E</b> lines contains two integers <b>a</b> and <b>b</b> implying that there is a unidirectional road from city <b>a</b> to city <b>b</b>.
</p>
<p>
It is guaranteed that there aren't multiple roads in the exact same direction and that there is no road from a city to itself.
</p>


<h3>Output</h3>
<p>If there is no solution, print "NO" (without quotes). Else, print "YES" (without quotes), followed by exactly <b>E</b> lines.</p>
<p>The <b>i<sup>th</sup></b> line of output should represent the <b>i<sup>th</sup></b> road in the input. It should have two integers <b>a</b> and <b>b</b> denoting that the final orientation of that road is from <b>a</b> to <b>b</b>.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>a, b</b> ≤ <b>N</b></li>
</ul>
</p>
<p>
<b>Subtask 1: (20 points)</b>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>21</b></li>
</ul>
</p>
<p>
<b>Subtask 2: (80 points)</b>
<ul>
<li><b>Same as original constraints</b></li>
</ul>
</p>

<h3>Example 1</h3>
<pre><b>Input:</b>
3 3
1 2
2 3
3 1

<b>Output:</b>
YES
1 2
2 3
3 1
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
3 2
1 2
2 3

<b>Output:</b>
NO
</pre>

<h3>Example 3</h3>
<pre><b>Input:</b>
5 6
1 2
2 3
3 4
2 4
2 5
1 5

<b>Output:</b>
YES
1 2
2 3
3 4
4 2
2 5
5 1
</pre>