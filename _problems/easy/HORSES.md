---
{"category_name":"easy","problem_code":"HORSES","problem_name":"Racing Horses","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"2-07-2012","tags":{"0":"sep12","1":"sorting","2":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/HORSES","time":{"view_start_date":1347346587,"submit_start_date":1347346587,"visible_start_date":1347346587,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef is very fond of horses. He enjoys watching them race. As expected, he has a stable full of horses. He, along with his friends, goes to his stable during the weekends to watch a few of these horses race. Chef wants his friends to enjoy the race and so he wants the race to be close. This can happen only if the horses are comparable on their skill i.e. the difference in their skills is less.</p>
<p>There are <b>N</b> horses in the stable. The skill of the horse <b>i</b> is represented by an integer <b>S[i]</b>. The Chef needs to pick 2 horses for the race such that the difference in their skills is <i>minimum</i>. This way, he would be able to host a very interesting race. Your task is to help him do this and report the minimum difference that is possible between 2 horses in the race.</p>

<h3>Input:</h3>
First line of the input file contains a single integer <b>T</b>, the number of test cases.<br/>
Every test case starts with a line containing the integer <b>N</b>.<br/>
The next line contains <b>N</b> space separated integers where the <b>i</b>-th integer is <b>S[i]</b>.<br/>

<h3>Output:</h3>
For each test case, output a single line containing the minimum difference that is possible.

<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N</b> ≤ 5000
1 ≤ <b>S[i]</b> ≤ 1000000000

</pre>

<h3>Example:</h3>
<b>Input:</b>
<pre>
1
5
4 9 1 32 13

</pre>
<b>Output:</b>
<pre>
3

</pre>

<b>Explanation:</b> The minimum difference can be achieved if we pick horses with skills 1 and 4 for the race.