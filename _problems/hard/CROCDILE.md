---
{"category_name":"hard","problem_code":"CROCDILE","problem_name":"Crocodile","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"14-06-2013","tags":{"0":"admin"},"editorial_url":"http://discuss.codechef.com/problems/CROCDILE","time":{"view_start_date":1371820895,"submit_start_date":1371820895,"visible_start_date":1371820895,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Archaeologist Benjamas is running for her life after investigating the mysterious Crocodile's Underground City. The city has <b>N</b> chambers. There are <b>M</b> bidirectional corridors, each connecting a different pair of distinct chambers. Running through different corridors may require different amounts of time. Only <b>K</b> of the <b>N</b> chambers are exit chambers that allow her to escape. Benjamas starts in chamber <b>0</b>. She wants to reach an exit chamber as quickly as possible.
</p>
<p>The Crocodile gatekeeper wants to prevent Benjamas from escaping. From his den, he controls secret doors that can block any <i>single</i> corridor. That is, whenever he blocks a new corridor, the previously blocked one has to be reopened.</p>
<p>Benjamas's situation can be described as follows: Each time she tries to leave a chamber, the Crocodile gatekeeper may choose to block one of the corridors adjacent to it. Benjamas then chooses and follows one of the unblocked corridors to the next chamber. Once Benjamas enters a corridor, the Crocodile gatekeeper may not block it until Benjamas reaches the other end. Once she enters the next chamber, the gatekeeper may again choose to block one of the outgoing corridors (possibly the corridor that Benjamas just followed), and so on.</p>
<p>She would like to have a simple escape plan in advance. More precisely, she would like to have a set of instructions that tell her what to do when she gets to a chamber. Let <b>A</b> be one of the chambers. If it is an exit chamber, no instructions are needed–obviously, she can escape the city. Otherwise, the instruction for chamber <b>A</b> should have one of the following forms:</p>
<ul>
<li> "If you ever reach chamber <b>A</b>, take the corridor leading to chamber <b>B</b>. However, if that corridor is blocked, then take the corridor leading to chamber <b>C</b>." </li>
<li>"Don't bother about chamber <b>A</b>; according to this escape plan you cannot possibly reach<br />
it." </li>
</ul>
<p>Note that in some cases (for example, if your plan directs Benjamas to run in a cycle) the gatekeeper may be able to prevent Benjamas from reaching an exit. An escape plan is good if Benjamas is guaranteed to reach an exit chamber after a finite amount of time, regardless of what the <i>gatekeeper</i> does. For a good escape plan, let <b>T</b> be the smallest time such that after time <b>T</b>, Benjamas is guaranteed to reach an exit. In that case, we say that the <i>good escape plan </i>takes time <b>T</b>.</p>
<p>Let us assume that:</p>
<ul>
<li> <b>N</b> – the number of chambers. The chambers are numbered <b>0</b> through <b>N-1</b>. </li>
<li> <b>M</b> – the number of corridors. The corridors are numbered <b>0</b> through <b>M-1</b>. </li>
<li> <b>R</b> – a two-dimensional array of integers representing the corridors. For <b>0 ≤ i &lt; M</b>, corridor i connects two distinct chambers <b>R[i][0] and R[i][1]</b>. No two corridors join the same pair of chambers.</li>
<li> <b>L</b> – a one-dimensional array of integers containing the times needed to traverse the corridors. For <b>0 ≤ i &lt; M</b>, the value <b>1 ≤ L[i] ≤ 1,000,000,000</b> is the time Benjamas needs to runthrough the <b>i<sup>th</sup></b> corridor. </li>
<li> <b>K</b> – the number of exit chambers. You may assume that <b>1 ≤ K &lt; N</b>. </li>
<li> <b>P</b> – a one-dimensional array of integers with K distinct entries describing the exit chambers. For <b>0 ≤ i &lt; K</b>, the value <b>P[i]</b> is the number of the <b>i<sup>th</sup></b> exit chamber. Chamber 0 will never be one of the exit chambers. </li>
</ul>

<h3> Input</h3>
<p>First line of input contains an integers <b>N, M K</b>. This will be followed by <b>M</b> lines, each having 3 integers <b>R[0][i]</b> and <b>R[0][i]</b> and <b>L</b>. This will be followed by another line having <b>K</b> integers <b>P[j]</b>.</p>
<h3> Output </h3>
<p>Output an integer, denoting the smallest time <b>T</b> for which there exists a good escape plan that takes time <b>T</b> . You may assume that each non-exit chamber will have at least two corridors leaving it. You may also assume that in each test case there is a good escape plan for which <b>T = 1,000,000,000</b>.</p>
<h3>Examples</h3>
<p><b>Example 1:</b><br/></br/></p>
<p><b>Input</b><br/></br/></p>
<pre>
5 4 3
0 1 2
0 2 3
3 2 1
2 4 4
1 3 4
</pre>
<p><b>Output</b><br/></br/></p>
<pre>7</pre>
<p><b>Explaination</b>: Consider the case shown in Figure 1, where <b>N=5, M=4, K=3</b>, and<br />
<br/><br />
<img src="http://www.codechef.com/download/croc.png" alt="croc" width="550" height="240" /><br/> <br/></br/></br/></br/></p>
<p>Chambers are shown as circles, and corridors connecting them are shown as lines. Exit chambers are shown as thick-bordered circles. Benjamas starts at chamber 0 (marked by a triangle). An optimal escape plan is the following one:</p>
<ul>
<li>If you ever reach chamber 0, take the corridor leading to chamber 1. However, if that corridor is blocked, then take the corridor leading to chamber 2.</li>
<li> If you ever reach chamber 2, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 4.<br />
In the worst case, Benjamas will reach an exit chamber in 7 units of time.</li>
</ul>

<p><b>Example 2:</b><br/></br/></p>
<p><b>Input</b><br/></br/></p>
<pre>
5 7 2
0 2 4
0 3 3
3 2 2
2 1 10
0 1 100
0 4 7
3 4 9
1 3
</pre>
<p><b>Output</b></p>
<pre>
14
</pre>
<p><b>Explaination</b>: Consider the case shown in Figure 2, where <b>N=5, M=7, K=2</b>, and<br />
<br/>
<p><img src="http://www.codechef.com/download/croc_1.png" alt="croc_1" width="550" height="200" /><br/> <br/>
</br/></br/></p>
<p>Here is an optimal escape plan:</p>
<ul>
<li> If you ever reach chamber 0, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 2. </li>
<li>If you ever reach chamber 2, take the corridor leading to chamber 3. However, if that corridor is blocked, then take the corridor leading to chamber 1. </li>
<li> Don't bother about chamber 4; according to this escape plan you cannot possibly reach it. </li>
</ul>
<p>Benjamas will reach one of the exit chambers no later than after 14 units of time.</p>
<h3>Subtasks</h3>
<p><b>Subtask 1 (46 points)</b></p>
<ul>
<li> 3 ≤ <b>N</b> ≤ 1 000.</li>
<li>The underground city is a tree. That is, <b>M = N-1</b> and for each pair of chambers <b>i</b> and <b>j</b> there is a sequence of corridors connecting <b>i</b> and <b>j</b>. </li>
<li>Every exit chamber is connected to exactly one other chamber. </li>
<li>Any other chamber is connected directly to three or more other chambers.</li>
</ul>
</br/></p>
<p><b>Subtask 2 (43 points)</b></p>
<ul>
<li> 3 ≤ <b>N</b> ≤ 1,000. </li>
<li>2 ≤ <b>M</b> ≤ 1,00,000. </li>
</ul>

<p><b>Subtask 3 (11 points)</b></p>
<ul>
<li>3 ≤ <b>N</b> ≤ 1,00,000.</li>
<li>2 ≤ <b>M</b> ≤ 1,000,000. </li>
</ul>

<hr />
<br/>
<p><font size=0.8> Note :</font></p>
<ul>
<li>Courtesy:  <a href="http://www.ioi2011.or.th/tasks">IOI 2011</a></li>
<li> This problem has been slightly modified to suit the online judge of CodeChef. </li>
</ul>
<p></p>
</br/>