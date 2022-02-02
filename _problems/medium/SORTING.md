---
{"category_name":"medium","problem_code":"SORTING","problem_name":"Sorting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"20-07-2013","tags":{"0":"easy","1":"ltime03","2":"persistence","3":"segment","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SORTING","time":{"view_start_date":1377419529,"submit_start_date":1377419529,"visible_start_date":1377419529,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice uses the following pseudocode when she needs to sort a permutation of <b>N</b> positive integers:<br>
<br>

procedure Sort(list <b>A</b>) defined as: <br>
   list <b>less</b>, <b>greater</b><br>
   if length(<b>A</b>) <= 1 then return <b>A</b><br>
   <b>pivot</b> := <b>A<sub>(length(A)+1) / 2</sub></b><br>
   for <b>i</b> := 1 to length(<b>A</b>) do:<br>
      Increment(<b>comparison_count</b>)<br>
      if <b>A<sub>i</sub></b> < <b>pivot</b> then append <b>A<sub>i</sub></b> to <b>less</b> else if <b>A<sub>i</sub></b> > <b>pivot</b> append <b>A<sub>i</sub></b> to <b>greater</b><br>
      end if<br>
   end for<br>
   return concatenate(Sort(<b>less</b>), <b>pivot</b>, Sort(<b>greater</b>) )<br>
<br>
And now we are interested in the number of comparisons that will be made during the sorting of the given permutation of integers <b>A</b> with the provided code. So, we ask you to find the value of the variable <b>comparison_count</b> after such a sorting.
</p>

<h3>Input</h3>
<p>The first line of input consists of a single integer <b>N</b>. The second line of input contains a permutation of <b>N</b> numbers. </p>

<h3>Output</h3>
<p>Output the number of comparisons on the first and only line of the output.</p>

<h3>Example</h3>
<pre><b>Input:</b>
5
4 3 5 1 2

<b>Output:</b>
11
</pre>

<h3>Scoring</h3>
Subtask 1 (32 points): 1 <= <b>N</b> <= 2000. <br>
Subtask 2 (9 points): 1 <= <b>N</b> <= 10<sup>5</sup>, the permutation is generated randomly.<br>
Subtask 3 (45 points): 1 <= <b>N</b> <= 65536. <br>
Subtask 4 (14 points): 1 <= <b>N</b> <= 5*10<sup>5</sup>.<br>