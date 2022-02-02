---
{"category_name":"hard","problem_code":"SADPAIRS","problem_name":"Chef and Sad Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"30-05-2016","tags":{"0":"hard","1":"june16","2":"kevinsogo","3":"tree"},"editorial_url":"http://discuss.codechef.com/problems/SADPAIRS","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/SADPAIRS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/SADPAIRS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/SADPAIRS.pdf">Vietnamese</a> as well.</h3>
<p>Chef has recently set up a network between the <b>N</b> residents of the dormitory. Each resident owns a personal computer. There are direct connections between <b>E</b> pairs of computers. Pairs of computers not directly connected can still communicate if there is a path between them in the network.</p>
<p>All <b>N</b> residents are fans of Basketball, but each one has their own favorite team. The <b>i</b>th resident's favorite team is team <b>G<sub>i</sub></b>. Naturally, fans of the same team want to communicate with each other via the network.</p>
<p>Unfortunately, Chef isn't too knowledgeable about computers so he didn't ensure that all pairs of computers can communicate with each other. We call a pair of residents <b>(i, j)</b> <b>sad</b> if they have the same favorite team (i.e., <b>G<sub>i</sub></b> = <b>G<sub>j</sub></b>) but they can't communicate with each other. Thus, there can be many sad pairs in the network right now.</p>
<p>Even worse, from time to time, someone gets disconnected from the network, further increasing the number of sad pairs. When a resident is disconnected, all direct connections to and from his/her computer becomes unusable.</p>
<p>Chef didn't anticipate all these problems and has turned to you for help. Your first task is to submit a report containing <b>N</b> integers, where the <b>i</b>th integer is <i>the number of sad pairs in the network if the <b>i</b>th resident was disconnected</i>.</p>
<h3>Input</h3>
<p>The first line contains two integers, <b>N</b> and <b>E</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>G<sub>1</sub></b>, <b>G<sub>2</sub></b>, ..., <b>G<sub>N</sub></b> denoting the residents' favorite teams.</p>
<p>The following <b>E</b> lines each contains two integers, <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>, which means that there is a direct connection between computers of resident <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>. Connections are bidirectional.</p>
<h3>Output</h3>
<p>Output <b>N</b> lines. The <b>i</b>th line must contain a single integer, the number of sad pairs if the <b>i</b>th resident was disconnected from the network.</p>
<h3>Constraints</h3>
<ul>
<li><b>5</b> ≤ <b>N</b> ≤ <b>2×10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>G<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>E</b> ≤ <b>min(2×10<sup>5</sup>, <b>N(N-1)/2</b>)</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> &lt; <b>b<sub>i</sub></b> ≤ <b>N</b></li>
<li>No pair (<b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>) will appear more than once in the input.</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1: (25 points)</b> Every computer can communicate with at most 59 other computers.
</p>
<p>
<b>Subtask #2: (75 points)</b> No additional constraints.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>7 6
1 3 3 1 1 3 1
1 2
2 3
1 3
4 5
5 6
6 7
</tt>
<b>Output:</b>
<tt>5
6
6
7
8
7
7
</tt></pre><h3>Explanation</h3>
<p>In the given network, residents 1, 4, 5 and 7 all have team 1 as their favorite, and 2, 3 and 6 all have team 3 as their favorite.</p>
<ul>
<li>If resident 1 is disconnected, then there are 5 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6).</li>
<li>If resident 2 is disconnected, then there are 6 sad pairs: (1,4), (1,5), (1,7), (2,3), (2,6), (3,6).</li>
<li>If resident 3 is disconnected, then there are 6 sad pairs: (1,4), (1,5), (1,7), (2,3), (2,6), (3,6).</li>
<li>If resident 4 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,5), (4,7).</li>
<li>If resident 5 is disconnected, then there are 8 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,5), (4,7), (5,7).</li>
<li>If resident 6 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,7), (5,7).</li>
<li>If resident 7 is disconnected, then there are 7 sad pairs: (1,4), (1,5), (1,7), (2,6), (3,6), (4,7), (5,7).</li>
</ul>
