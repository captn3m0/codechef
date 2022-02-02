---
{"category_name":"easy","problem_code":"DREAM","problem_name":"Chef\u0026#39;s Dream","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kamranmaharov ","problem_tester":"laycurse","date_added":"10-04-2012","tags":{"0":"july12","1":"kamranmaharov","2":"simple","3":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/DREAM","time":{"view_start_date":1342000217,"submit_start_date":1342000217,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">   The Chef is sleeping now. He tries to cook new kind of meals in his dream.<br /> <br />
These meals are arranged in a row and numbered from 1 to <b>N</b> consecutively. For each meal <i>i</i> (1&lt;=<i>i</i>&lt;=<b>N</b>) there 

is given one integer <i>f(i)</i> which denotes the time needed to cook it. Initially, all meals are uncooked. Each assistant 

of The Chef (there are infinite number of them) can help him with cooking.<br /> <br />
The abilities of all assistants are same. There can be at most one assistant cooking at each moment. He must choose some 

continuous subsequence of meals with length <b>K</b>(any such subsequence can be chosen). And if there are uncooked meals in 

it, he will cook all uncooked meals which has the minimum cooking time among uncooked meals in the chosen subsequence. 

Nothing done to another meals.
<br /> <br />

   The dream was so interesting that he tried to solve such a problem: What is the minimum number of assistants which can 

cook all the meals assuming that each of them will cook at most once?
   But since the bell rings and Chef's friends has come to visit him, he will wake up after 2 seconds. Your program 

should calculate the answer before The Chef will come to himself.
<h3>Input</h3>
</p><p>First line of input file contains two integers <b>N</b> (1&lt;=<b>N</b>&lt;=10<sup>5</sup>) and <b>K</b> (1&lt;=<b>K</b>&lt;=<b>N</b>), 

followed by a line containing <b>N</b> integers. The <i>i<sup>th</sup></i> integer denotes <i>f(i)</i>-the cooking time of 

meal number <i>i</i> (1&lt;=<i>f(i)</i>&lt;=10<sup>9</sup>)

<h3>Output</h3>
</p><p>Print minimum number of assistans which can cook all the meals in one line.

<h3>Example</h3>

<pre>
<b>Input:</b>
5 3
40 30 40 30 40

<b>Output:</b>
3
</pre>

<br />
<b>Explanation:</b>
<br />3 assistants are enough to cook all the meals. They can work in following schedule:
<br />1<sup>st</sup> assistant chooses interval [2,4] and cooks meals 2 and 4.
<br />2<sup>nd</sup> assistant chooses interval [1,3] and cooks meals 1 and 3.
<br />3<sup>rd</sup> assistant chooses interval [3,5] and cooks meal 5.
<br />Other schedules can also be possible.</p>