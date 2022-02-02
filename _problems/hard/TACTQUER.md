---
{"category_name":"hard","problem_code":"TACTQUER","problem_name":"Shortest path queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"errichto","date_added":"9-09-2016","tags":{"0":"cook74","1":"dynamic","2":"graph","3":"hard","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TACTQUER","time":{"view_start_date":1474223400,"submit_start_date":1474223400,"visible_start_date":1474223400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/mandarin/TACTQUER.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/russian/TACTQUER.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK74/vietnamese/TACTQUER.pdf">Vietnamese</a> as well.</h3>



<p>
With the impressive achievement in competitive programming Jem was offered an internship at IBER - a tech company that provides an alternative to tradditional taxi service.
</p>

<p>
Jem first task was help IBER quickly calculate the distance between two arbitrary locations in Jem's city. As an experienced competitive programmer Jem understand that this is not a trivial problem with general graph. Fortunately after investigate the city map Jem found out that the roads system is have a special form which may make Jem's problem easier to deal with.
</p>

<p>
There are <b>N</b> locations in the city and <b>M</b> bidirectional road connecting them. Each road <b>i</b> have the length of <b>C<sub>i</sub></b> and no two road connect the same pair of locations. The roads system is designed in a way that from a specific location one can travel to any other locations. The most important point is that there is no location belong to more than one cycle in the graph corresponding to road network.
</p>

<p>
So Jem already got his solution. If you want to secure an internship at IBER maybe you can try to solve this problem too!
</p>

<h3>Input</h3>

<p>
<ul>
  <li>
    The first line of the input contains two number <b>N</b> and <b>M</b>
  </li>

  <li>
    In the next <b>M</b> line each line contains three numbers <b>u</b>, <b>v</b> and <b>c</b> represent a road of length <b>c</b> connects location <b>u</b> and <b>v</b>.
  </li>

  <li>
    Next line contains a single number <b>Q</b> represents the number of queries.
  </li>

  <li>
    In the next <b>Q</b> lines each line contains two numbers <b>u</b> and <b>v</b> corresponding to a query of the length of the shortest path between location <b>u</b> and <b>v</b>.
  </li>
</ul>
</p>

<h3>Output</h3>
<p>
For each query print out the corresponding result in one line.
</p>


<h3>Constraint</h3>

<p>
  <ul>
    <li>
      2 ≤ <b>N</b> ≤ 10<sup>5</sup>
    </li>

    <li>
      1 ≤ <b>M</b> ≤ 2 × 10<sup>5</sup>
    </li>

    <li>
      1 ≤ <b>Q</b> ≤ 10<sup>5</sup>
    </li>

    <li>
      1 ≤ <b>c</b> ≤ 10<sup>4</sup>
    </li>
  </ul>
</p>

<br>

<h3>Example</h3>
<pre>
<b>Input 1</b>:
4 3
1 2 2
2 3 3
2 4 4
2
1 4
4 3

<b>Output 1</b>:
6
7

<b>Input 2</b>:
7 8
1 2 2
1 3 4
2 3 1
3 4 1
4 5 1
4 7 1
5 6 2
6 7 1
3
1 4
5 7
1 6


<b>Output 2</b>:
4
2
6
</pre>

<h3>Explaination</h3>
<p>
<b>Test 2:</b> the graph is shown in the picture below.
</p>
<p>
<img src="http://www.codechef.com/download/upload/tactquer-example-2.png" width="50%"/>
</p>
<p>
The shortest path for each query are:
<ul>
<li>
 From 1 to 4: 1 -> 2 -> 3 -> 4
</li>
<li>
  From 5 to 7: 5 -> 4 -> 7
</li>
<li>
From 1 to 6: 1 -> 2 -> 3 -> 4 -> 7 -> 6
</li>
</ul>
</p>
