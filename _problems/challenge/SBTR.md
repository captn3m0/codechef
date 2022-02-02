---
{"category_name":"challenge","problem_code":"SBTR","problem_name":"Saboteur (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":null,"date_added":"24-04-2017","tags":{"0":"alexvaleanu"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/SBTR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/SBTR.pdf">Vietnamese</a> as well.</h3>

<p> Sean Devlin is trying to free France by destroying some radio towers used by Kurt Dierker's intelligence division. 
</p>

<p>
The whole network of radio towers can be modeled using a graph where each vertex is a radio tower. Between some radio towers, there is a bi-directional cable. Being a state of the art network, any two towers are connected, either directly or indirectly by a series of cables. 
</p>

<p>
There is an advanced mechanism implemented that detects if the network has been <b>disconnected</b> (i.e. there are at least two active towers that are not connected). 
</p>

<p>
Sean's goal is to destroy some radio towers in order to cripple Kurt's communication network. There is a cost that has to be paid (soldiers to be bribed, TNT to be purchased, etc) in order to bring down a tower. Sean's plan must respect a few constraints:

<ul>
<li>The remaining set of towers (possibly empty) <b>must be connected</b>. Kurt can easily find out if a message can't reach its destination.</li>
<li>The remaining set of towers (possibly empty) <b>must not contain a cycle</b>. Cycles are quite easy to detect in a radio network.</li>
<li>The total cost of the plan (i.e. total sum of costs to destroy the set of towers in the plan) has to be <b>minimised</b> because the Resistance's funds are not what they used to be.</li>
</ul>
</p>

<p>
Having this very important task, Sean asks you to help him create the plan that's supposed to
defeat Kurt Dierker's army.
</p>

<h3>Input</h3>
<p>The first line of the input file contains two integers, <b>N</b> and <b>M</b>, separated by a single space, where <b>N</b> is the number of radio towers and <b>M</b> is the number of cables.
</p>
<p>On the next line, there are <b>N</b> integers, <b>cost<sub>1</sub></b>, <b>cost<sub>2</sub></b> ... <b>cost<sub>N</sub></b> where <b>cost<sub>i</sub></b> = the cost of destroying the i-th tower.
</p>
<p>Each of the next <b>M</b> lines contains a pair of integers representing a pair of towers
that are directly connected by a bidirectional cable.
</p>

<h3>Output</h3>
<p>
The first line contains an integer <b>K</b> representing the number of towers you
think that Sean should destroy.
</p>
<p>The next contains <b>must</b> contain <b>K</b> different integers, <b>t<sub>1</sub></b>,
<b>t<sub>2</sub></b> ...  <b>t<sub>K</sub></b> where <b>t<sub>i</sub></b> = the id of
the i-th tower to be destroyed. The order in which the ids are printed doesn't matter.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>N - 1</b> ≤ <b>M</b> ≤ <b>5 * 10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>cost<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
<li>The given network is <b>connected</b>.</li>
<li>Between any pair of towers there is <b>at most</b> one cable</b>.</li>
<li>There is no cable from a tower to itself.</li>
<li>Note: an empty graph is connected and doesn't contain any cycles.</li>
</ul>

<h3>Test generation</h3>
<p>There are several types of datasets:
<ul>
<li>Dataset #0: small network
    <ul style="list-style-type:disc">
    <li><b>N</b> ≤ <b>20</b></li>
    </ul>
</li>
<li>Dataset #1: smallish network
    <ul style="list-style-type:disc">
    <li><b>N</b> ≤ <b>40</b></li>
    </ul>
</li>
<li>Dataset #2: almost tree
    <ul style="list-style-type:disc">
    <li><b>M</b> = <b>N</b></li>
    </ul>
</li>
<li>Dataset #3: close-enough tree
    <ul style="list-style-type:disc">
    <li><b>M</b> ≤ <b>N + 3</b></li>
    </ul>
</li>
<li>Dataset #4: complete network
    <ul style="list-style-type:disc">
    <li>The network is a <a href="https://en.wikipedia.org/wiki/Complete_graph">complete graph</a>.</li>
    <li><b>M</b> = <b>N * (N - 1) ⁄ 2</b></li>
    </ul>
</li>
<li>Dataset #5: wheel network
    <ul style="list-style-type:disc">
    <li>The network is a <a href="https://en.wikipedia.org/wiki/Wheel_graph">wheel graph</a>.</li>
    </ul>
</li>
<li>Dataset #6: random network
    <ul style="list-style-type:disc">
    <li>The network is a randomly generated graph.</li>
    </ul>
</li>
</ul>

<p>Distribution (20 tests):
<ul>
    <li>small network: 1 test</li>
    <li>smallish network: 2 tests</li>
    <li>almost tree: 3 tests</li>
    <li>close-enough tree: 3 tests</li>
    <li>complete network: 2 tests</li>
    <li>wheel network: 3 tests</li>
    <li>random network: 6 tests</li>
</ul>
</p>

<p><b>Note: During the contest your code will run against only one test from each type of dataset.</b></p>

<p>Some notes about how the tests were generated:
<ul>
    <li>For each test, the <b>N</b> and the <b>M</b> were chosen 'by hand'.</li>
    <li>All tests start with a tree (so that the nodes are connected) which is modified (if needed).</li>
    <li>Close-enough, almost tree and random network add random edges (if they don't already exist).</li>
    <li>For the wheel network, <b>N-1</b> nodes are connected in a cycle and then <b>N-1</b> edges are added in order to connect the <b>N</b>-th node.</li>
    <li>All edges are generated with the same probability.</li>
</ul>
</p>

<h3>Scoring</h3>
<p>
Your score for one test is the sum of costs for all the towers in your plan. The final score is the sum of scores in all tests. The goal is to <b>minimise</b> that score.
</p>
<p>
If your program works incorrectly (e.g. it exceeds the time limit or the plan is not valid) on any of the tests, you will get a suitable verdict (e.g. TLE or WA). Otherwise, you will get AC and your score will be decided by only a part of the tests (see test generation). 
The final score will be revealed after the contest.
</p>

<h3>Example</h3>
<pre><b>Input:</b>
10 10
1 2 5 1 3 2 4 3 1 2
2 1
8 1
5 1
10 2
6 2
9 5
6 10
3 10
4 6
7 8

<b>Output:</b>
2
6 4
</pre>

<pre><b>Input:</b>
2 1
5 9
1 2

<b>Output:</b>
0
</pre>

<pre><b>Input:</b>
3 2
6 7 8
1 3
2 3

<b>Output:</b>
3
1 2 3
</pre>

<b>Explanation for the first example</b>
<p>
There is only one cycle containing the nodes 2, 6, and 10.
One can remove any of them but should make sure that the resulting network is connected.
For example, you can remove 6 but you'd also have to remove 4;
Another valid solution: 3 and 10 (higher cost).
A valid solution can also include other nodes: 7, 3, 10, 5, and 9.
</p>

<a href="https://imgbb.com/"><img src="https://image.ibb.co/j2Db5v/sbtr.png" alt="sbtr" border="0" /></a>
<br>

<b>Explanation for the last two examples</b>
<p>
As both of them are trees, almost any subset of nodes will be a valid solution.
The suggested output is not intended to be unique or optimal.
</p>