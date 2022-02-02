---
{"category_name":"hard","problem_code":"ELPHANT","problem_name":"Elephant","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 10","source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"12-06-2013","tags":{"0":"admin"},"editorial_url":"http://discuss.codechef.com/problems/ELPHANT","time":{"view_start_date":1372355434,"submit_start_date":1372355434,"visible_start_date":1372355434,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><i>Dancing Elephants</i> is a spectacular show in Pattaya that features <b>N</b> elephants dancing on a line, known<br />
    as the <i>stage</i>.</p>
<p>After years of training, elephants in this show are capable of many amazing dances. The show consists of a series of<br />
    acts. In each act, exactly one elephant performs a cute dance while possibly moving to a different position.</p>
<p>The show producers want to produce a photo book that contains pictures of the entire show. After each act, they want<br />
    to take pictures of all elephants as seen by the spectators.</p>
<p>At any time during the show, multiple elephants may share the same position. In that case, they simply stand behind<br />
    one another at the same position.
</p>
<p>A single camera can take a picture of a group of elephants if and only if all their positions lie on some segment of<br />
    length <b>L</b> (including both its endpoints). As the elephants can spread out across the stage, multiple cameras<br />
    may be needed in order to take simultaneous snapshots of all the elephants.</p>
<p> As an example, suppose that <b>L=10</b> and that the elephants are at positions 10, 15, 17, and 20 on the stage. At<br />
    this moment, a single camera can take their picture, as shown below. (Elephants are shown as triangles; cameras are<br />
    shown as trapezoids.)</p>
<p><img src="http://www.codechef.com/download/elephant_1.png" alt="elephant_1" /><br />
<br/></br/></p>
<p>In the following act, the elephant at position 15 dances to position 32. After this act, we need at least two cameras<br />
    to take the snapshot.</p>
<p><img src="http://www.codechef.com/download/elephant_2.png" alt="elephant_2" /> <br/></br/></p>
<p>In the next act, the elephant at position 10 moves to position 7. For the new arrangement of elephants, we need three<br />
    cameras to photograph all of them.</p>
<p><img src="http://www.codechef.com/download/elephant_3.png" alt="elephant_3" /><br/></br/></p>
<p>In this task, you have to determine the minimum number of cameras needed to take the pictures after each<br />
    of the acts. Note that the number of cameras needed may increase, decrease, or stay the same between acts. </p>
<p>Let us assume that:</p>
<ul>
<li> <b>N</b> – the number of elephants. The elephants are numbered <b>0</b> through <b>N-1</b>. </li>
<li> <b>L</b> – the length of the segment captured by a single camera. You may assume that L is an integer such that <b>1 ≤ L ≤ 1,000,000,000</b>.</li>
<li> <b>M</b> – the number of acts performed. You may assume that M is an integer such that <b>1 ≤ M ≤ 150,000</b>.</li>
<li> <b>i</b> – the number of the elephant that moves in the current act.</li>
<li> <b>y</b> – the position where the elephant i will stand after the current act. You may assume that y is an integer such that <b>1 ≤ L ≤ 1,000,000,000</b>.</li>
</ul>
<h3> Input</h3>
<p>First line of input contains an integers <b>N L M</b>. This will be followed by <b>N</b> lines, each having 1 integer, representing the initial positions of N elephants. This will be followed by another <b>M</b> lines having <b>2</b> integers <b>i</b> and <b>y</b>.</p>
<h3> Output </h3>
<p>Output should consist of <b>M</b> integers in separate lines, denoting the <b>minimum number of cameras</b> needed to photograph all elephants after the corresponding act.</p>
<h3>Examples</h3>
<p><b>Example 1:</b><br/></br/></p>
<p><b>Input</b><br/></br/></p>
<pre>
4 10 5
10
15
17
20
2 16
1 25
3 35
0 38
2 0
</pre>
<p><b>Output</b><br/></br/></p>
<pre>
1
2
2
2
3
</pre>
<p><b>Example 2:</b><br/></br/></p>
<p><b>Input</b><br/></br/></p>
<pre>
2 12321 3
2
123
1 76543
0 66321
0 78754
</pre>
<p><b>Output</b><br/></br/></p>
<pre>
2
1
1
</pre>
<h3>Subtasks</h3>
<p><b>Subtask 1 (10 points)</b></p>
<ul>
<li> There are exactly <b>N</b> = 2 elephants.</li>
<li> Initially, and after each act, the positions of all elephants will be distinct.</li>
</ul>

<p><b>Subtask 2 (16 points)</b></p>
<ul>
<li> 1 ≤ <b>N</b> ≤ 100.</li>
<li> Initially, and after each act, the positions of all elephants will be distinct.</li>
</ul>

<p><b>Subtask 3 (24 points)</b></p>
<ul>
<li> 1 ≤ <b>N</b> ≤ 50,000</li>
<li> Initially, and after each act, the positions of all elephants will be distinct.</li>
</ul>

<p><b>Subtask 4 (47 points)</b></p>
<ul>
<li> 1 ≤ <b>N</b> ≤ 70,000</li>
<li> Elephants may share the same position.</li>
</ul>

<p><b>Subtask 5 (3 points)</b></p>
<ul>
<li>1 ≤ <b>N</b> ≤ 1,50,000.</li>
<li>Elephants may share the same position</li>
</ul>

<hr/>
<p><font size=0.8> Note :</font></p>
<ul>
<li>Courtesy: <a href="http://www.ioi2011.or.th/tasks">IOI 2011</a></li>
<li> This problem has been slightly modified to suit the online judge of CodeChef. testchange</li>
</ul>
<p></p>
</hr/>