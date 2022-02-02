---
{"category_name":"medium","problem_code":"ABCSTR","problem_name":"ABC-Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"gerald","date_added":"8-02-2014","tags":{"0":"ad","1":"cook44","2":"kostya_by","3":"map","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ABCSTR","time":{"view_start_date":1395599400,"submit_start_date":1395599400,"visible_start_date":1395599400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/ABCSTR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/ABCSTR.pdf">Russian</a> as well.</h3>
<p>
Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:
</p>
<p><i><br />
You are given an AB-string <b>S</b>. You need to count the number of substrings of S, which have an equal number of 'A'-s and 'B'-s.<br />
</i></p>
<p>
Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.
</p>
<p><i><br />
You are given an ABC-string <b>S</b>. You need to count the number of substrings of S, which have an equal number of 'A'-s, 'B'-s and 'C'-s.<br />
</i></p>
<p>
A string is called AB-string if it doesn't contain any symbols except 'A' or 'B'. A string is called ABC-string if it doesn't contain any symbols except 'A', 'B' or 'C'.
</p>
<h3>Input</h3>

<p>The first line of the input contains an ABC-string <b>S</b>.</p>
<h3>Output</h3>
<p>Your output should contain the only integer, denoting the number of substrings of <b>S</b>, which have an equal number of 'A'-s, 'B'-s and 'C'-s.
</p>
<p>The answer can go above a 32-bit integer. Please, use 64-bit integers for storing and processing data.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>|S|</b> ≤  1 000 000; where <b>|S|</b> denotes the length of the given ABC-string.</p>
<h3>Example</h3>
<pre><b>Input:</b>
ABACABA

<b>Output:</b>
2
</pre>
<h3>Explanation</h3>
<p>
In the example you should count <b>S</b>[2..4] = "BAC" and <b>S</b>[4..6] = "CAB".
</p>
