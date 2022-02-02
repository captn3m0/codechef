---
{"category_name":"hard","problem_code":"MGCHGYM","problem_name":"Misha and Gym","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"26-08-2015","tags":{"0":"bitset","1":"dynamic","2":"medium","3":"mgch","4":"oct15","5":"treap"},"editorial_url":"http://discuss.codechef.com/problems/MGCHGYM","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/MGCHGYM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/MGCHGYM.pdf">Russian</a> </h3>
<p>When Misha hits his favorite gym, he comes across an interesting problem with the <a href="https://en.wikipedia.org/wiki/Barbell">barbell</a>. In the gym, someone always leaves the weight plates in the strangest places you can imagine and sometime it's difficult to equip the barbell the way you want. Let's imagine that you have <b>N</b> weight plates placed in any order (remember that any gym has no more than <b>K</b> different types of weight plates and all weights are <a href="https://en.wikipedia.org/wiki/Square-free_integer">square-free</a>). As a preliminary step towards solving this problem, Misha wants to simulate a simple gym, and for this purpose you have to deal with some queries:
</p>
<ul>
<li>[<b>1 I X</b>] Set the weight of the <b>i<sup>th</sup></b> weight plate to value <b>X</b>.
 </li>
<li>[<b>2 L R</b>] Reverse the sequence of weight plates in the interval from <b>L</b> to <b>R</b>, where <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b>.
 </li>
<li>[<b>3 L R W</b>] Check the interval from <b>L</b> to <b>R</b> to find out if you can make the weight <b>W</b> using only weight plates on this interval. (<b>Note</b>: this type of query will appear no more than <b>P</b> times)
 </li>
</ul>
<p>Please help Misha in solving this problem.
 </p>
<h3>Input</h3>
<p>First line of input contains the number of weight plates <b>N</b>, and number of queries <b>Q</b>. Next line contains <b>N</b> integers <b>w<sub>1</sub></b>, <b>w<sub>2</sub></b>, ..., <b>w<sub>N</sub></b>, where <b>w<sub>i</sub></b> is the weight of the <b>i<sup>th</sup></b> weight plate. Next <b>Q</b> lines contain some queries described above.
</p>
<h3>Output</h3>
<p>For all queries of the third type: print "<b>Yes</b>" if your check returns a positive outcome, and "<b>No</b>" otherwise.
 </p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>W</b>, <b>Q</b> ≤ 10<sup>5<sup></sup></sup></li>
<li><b>K</b> ≤ 10</li>
<li><b>P</b> ≤ 1000</li>
<li>All numbers in the input are positive integers and ≤ <b>10<sup>5</sup></b>.</li>
<li>All the weights are square-free.</li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> 1 ≤ <b>N</b> ≤ 10<sup>3</sup>, 1 ≤ <b>W</b> ≤ 10<sup>3</sup>, <b>Q</b> = 1 - <b>10 pts</b>.
</li>
<li><b>Subtask 2:</b> 1 ≤ <b>N</b> ≤ 10<sup>3</sup>, 1 ≤ <b>W</b> ≤ 10<sup>3</sup>, 1 ≤ <b>Q</b> ≤ 10<sup>3</sup>, <b>P</b> ≤ 100 - <b>15 pts</b>
</li>
<li><b>Subtask 3:</b> 1 ≤ <b>N</b> ≤ 10<sup>4</sup>, 1 ≤ <b>W</b> ≤ 10<sup>4</sup>, 1 ≤ <b>Q</b> ≤ 10<sup>4</sup>, <b>P</b> ≤ 300 - <b>25 pts</b>.
</li>
<li><b>Subtask 4:</b> 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, 1 ≤ <b>W</b> ≤ 10<sup>5</sup>, 1 ≤ <b>Q</b> ≤ 10<sup>5</sup>, <b>K</b> ≤ 2 - <b>20 pts</b>.
</li>
<li><b>Subtask 5:</b> Original constraints - <b>30 pts</b>.
</li>
</ul>
<h3>Example</h3>
<h4>First</h4>
<pre>
<b>Input:</b>
<tt>5 10
1 2 3 5 6
3 2 3 3
3 2 3 4
3 2 3 5
2 2 5
3 2 4 8
1 2 1
3 2 4 8
2 1 4 
3 2 4 3 
3 1 5 7 </tt>

<b>Output:</b>
<tt>Yes
No
Yes
Yes
Yes
No
Yes</tt>
</pre><h4>Second</h4>
<pre>
<b>Input:</b>
<tt>3 4
2013 2015 2017
3 1 3 4030
1 1 111
3 1 3 4030
3 1 2 111</tt>

<b>Output:</b>
<tt>Yes
No
Yes</tt>
</pre><h3>Explanation:</h3>
<h5>First test explanation (step by step)</h5>
<pre>
1 2 3 5 6
3 2 3 3 (<b>[2, 3]</b> 3=3 => <b>Yes</b>)
3 2 3 4 (<b>[2, 3]</b> can't make 4 => <b>No</b>)
3 2 3 5 (<b>[2, 3]</b> 2+3=5 => <b>Yes</b>)
2 2 5 (<b>Reverse</b>: [1,<b> 6, 5, 3, 2</b>])
3 2 4 8 (<b>[6, 5, 3]</b> 5+3=8 => <b>Yes</b>)
1 2 1 (<b>Set</b>: [1,<b> 1,</b> 5, 3, 2])
3 2 4 8 (<b>[1, 5, 3]</b> 5+3=8 => <b>Yes</b>)
2 1 4  (<b>Reverse</b>: [<b>3, 5, 1, 1</b>, 2])
3 2 4 3 (<b>[5, 1, 1]</b> can't make 3 => <b>No</b>)
3 1 5 7 (<b>[3, 5, 1, 1, 2]</b> 2+1+1+3=7 => <b>Yes</b>)
</pre>