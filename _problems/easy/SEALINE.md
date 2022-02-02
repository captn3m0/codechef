---
{"category_name":"easy","problem_code":"SEALINE","problem_name":"Sereja and Line","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"5-11-2015","tags":{"0":"cook64","1":"easy","2":"implementation","3":"sereja","4":"simulation"},"editorial_url":"http://discuss.codechef.com/problems/SEALINE","time":{"view_start_date":1448217000,"submit_start_date":1448217000,"visible_start_date":1448217000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/mandarin/SEALINE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/russian/SEALINE.pdf">Russian</a>.</h3>


<p>
Sereja is hosting his birthday dinner. He invited his <b>N</b> close friends. Let us number the people from <b>1</b> to <b>N</b> according to the order in which they arrive at the event. The dinner is being held in long straight corridor in which people sit in a way such that they won't leave any empty space in between two consecutive persons at any given time. 
</p>

<p>
When a person number <b>i</b> arrives at the corridor, he must go and stand to the immediate right of the person numbered <b>A[i]</b> (if <b>A[i] = 0</b>, then this person just stands at the leftmost end of the line). 
</p>

<p>
But there is a problem, as there is no space between two consecutive persons at any given time, so for this person to sit, space must be created by moving either all the persons to left of the place to the left one step each, or all the persons to right of the place to the right one step each.  
</p>

<p>
Now, Sereja is wondering about what could be the minimum number of steps people will take so as to sit in the dinner party. Please find it fast, so that Sereja can peacefully entertain his guests.
</p>

<h3>Input</h3>
<p>First line of input contain an integer <b>T</b> — the number of test cases. <b>T</b> tests follow.</p>
<p>First line of each test case contain the integer <b>N</b>, and the next line contains <b>N</b> integers — <b>A[1], A[2], ... , A[N]</b>.</p>

<h3>Output</h3>
For each test case, output a single line with the answer — the minimal number of steps required.

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>A[i]</b> < <b>i</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1
0
3
0 0 0
5
0 1 2 1 4

<b>Output:</b>
0
0
3
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 3.</b> 
<ul>
<li>First three persons don't need any steps to sit. The line after the arrangement of these persons will look like <b>[1, 2, 3]</b>. </li> </br>
<li>When person #4 comes in, he wants to sit to the right of person 1, so we need to either move the first person to the left, or the second and third persons to the right. The first case is clearly better. Now the line will look like <b>[1, 4, 2, 3]</b>. </li> </br>
<li>When person #5 arrives, he will need to move 2 persons in either case. The final arrangement will be <b>[1, 4, 5, 2, 3]</b>. </br>
</ul>
</p>
<p>
So total number of steps people moved during the entire process is <b>1 + 2 = 3</b>. So the answer is 3.</li> 
</p>