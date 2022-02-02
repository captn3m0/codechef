---
{"category_name":"medium","problem_code":"GRTRIP","problem_name":"Greedy Trip","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"vamsi_kavala","date_added":"16-06-2013","tags":{"0":"Rubanenko","1":"dfs","2":"graphs","3":"ltime01","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/GRTRIP","time":{"view_start_date":1372581592,"submit_start_date":1372581592,"visible_start_date":1372581299,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef feels pretty greedy today. As you know Chef lives in ChefLand. It consists of <b>N</b> cities, connected by <b>M</b> one-directional roads. There are plenty of festivals in ChefLand and Chef does not want to miss any of them. So he has invented an efficient (as he thinks) algorithm of finding the shortest paths between cities. To get from city <i>S</i> to city <i>T</i> then he uses following method:</p>
<ul>
<li>The trip starts at city <i>S</i></li>
<p><br/></br/></p>
<li>If Chef reaches city <i>T</i> then the algorithm stops</li>
<p><br/></br/></p>
<li>Initially only city S is visited and others are not</li>
<p><br/></br/></p>
<li>Chef chooses the shortest road from the current city that leads him to any unvisited city; if there are multiple shortest roads connected to unvisited cities then Chef can choose any of them; if all neighbour cities are visited then the algorithm stops</li>
<p><br/></br/></p>
<li>Chef goes along chosen road and algorithm returns to the previous step</li>
<p><br/>
</br/></p></ul>

<p>If in the end of the algorithm Chef is in the City T then he assumes this path to be the shortest, otherwise Chef believes that it is impossible to get from city <i>S</i> to city <i>T</i> by current system of roads.<br />
You want to check his greedy algorithm. To do this you need to find number of such different pairs of cities (U,V) that this algorithm can probably find the shortest path from city U to city V. Note that if it is impossible to reach city V from U and Chef's algorithm can conclude the same that this pair of cities is also counted to the answer. Have a look at the example for better understanding.</p>
<h3>Input:</h3>
<p>The first line contains the number of cities <b>N</b>, the number of roads.  Then <b>M</b> lines follow with description of roads. Each road is described by three integers <b>u</b>, <b>v</b> and <b>w</b>, it means that there is a road from city <b>u</b> to city <b>v</b> of length <b>w</b>.<br/><br/></br/></br/></p>
<h3>Output:</h3>
<p>Output should contain a single integer on the first line - answer for the problem.<br/><br/></br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>N</b> ≤ 2000
1 ≤ <b>M</b> ≤ 10000
1 ≤ <b>u,v</b> ≤ <b>N</b>
1 ≤ <b>w</b> ≤ 10000

</pre><h3>Example:</h3>
<p><b>Input #1:</b></p>
<pre>
2 0

</pre><p><b>Output #1:</b></p>
<pre>
4

</pre><p>
<b>Input#2:</b></p>
<pre>
3 3
1 2 1
1 3 2
2 3 2

</pre><p><b>Output#2:</b></p>
<pre>
8

</pre><p><b>Explanation:</b><br/><br />
For input#1 every possible pair is valid. for input#2 pair(1,3) is not valid, since Chef's algorithm will always go this way 1->2->3, while 1->3 is right way to get from 1 to 3. <br/><br/></br/></br/></br/></p>
<h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for solving the problem correctly for 1 ≤ <b>N, M </b> ≤ 300.<br/><br />
The remaining <b>60</b> points will be awarded for solving the problem correctly for <b>N, M </b> > 300.</br/></p>
