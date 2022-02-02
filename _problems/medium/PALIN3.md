---
{"category_name":"medium","problem_code":"PALIN3","problem_name":"3-Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"gerald","date_added":"8-02-2014","tags":{"0":"cook44","1":"kostya_by","2":"manacher","3":"medium","4":"string"},"editorial_url":"http://discuss.codechef.com/problems/PALIN3","time":{"view_start_date":1395599400,"submit_start_date":1395599400,"visible_start_date":1395599400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/PALIN3/mandarin/MINXOR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/PALIN3/russian/MINXOR.pdf">Russian</a> as well.</h3>
<p>
Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:
</p>
<p><i><br />
You are given a digit string <b>S</b>. You need to count the number of substrings of <b>S</b>, which are palindromes.<br />
</i></p>
<p>
Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.
</p>
<p><i><br />
You are given a digit string <b>S</b>. You need to count the number of substrings of <b>S</b>, which are palindromes without leading zeros and can be divided by 3 without a remainder.<br />
</i></p>
<p>
A string is a palindrome if it reads the same backward as forward. A string is a palindrome without leading zeros if it reads the same backward as forward and doesn't start with symbol '0'. A string is a digit string, if it doesn't contain any symbols except '0', '1', '2', ..., '9'.
</p>
<p>
Please, note that you should consider string "0" as a palindrome without leading zeros.
</p>
<h3>Input</h3>

<p>The first line of the input contains a digit string <b>S</b>.</p>
<h3>Output</h3>
<p>Your output should contain the only integer, denoting the number of substrings of <b>S</b>, which are palindromes without leading zeros and can be divided by 3 without a remainder.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>|S|</b> ≤ 1 000 000</p>
<h3>Example</h3>
<pre><b>Input:</b>
1045003

<b>Output:</b>
4
</pre>
<h3>Explanation</h3>
<p>
In the example you should count <b>S</b>[2..2] = "0", <b>S</b>[5..5] = "0", <b>S</b>[6..6] = "0" and <b>S</b>[7..7] = "3".
</p>
