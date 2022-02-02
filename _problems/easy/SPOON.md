---
{"category_name":"easy","problem_code":"SPOON","problem_name":"Spoon in Matrix","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"anton_lunyov","date_added":"18-01-2012","tags":{"0":"easy","1":"march12","2":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/SPOON","time":{"view_start_date":1331460077,"submit_start_date":1331460077,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef recently saw the movie Matrix. He loved the movie overall but he didn't agree with some things in it. Particularly he didn't agree with the bald boy when he declared - <a href="http://youtu.be/dzm8kTIj_0M">There is no spoon</a>. Being a chef, he understands the importance of the spoon and realizes that the universe can't survive without it. Furthermore, he is sure there is a spoon; he saw it in his kitchen this morning. So he has set out to prove the bald boy is wrong and find a spoon in the matrix. He has even obtained a digital map already. Can you help him?

Formally you're given a matrix of lowercase and uppercase Latin letters. Your job is to find out if the word "Spoon" occurs somewhere in the matrix or not. A word is said to be occurred in the matrix if it is presented in some row from left to right or in some column from top to bottom. Note that match performed has to be case insensitive. 

<h3>Input</h3>
</p><p>The first line of input contains a positive integer <b>T</b>, the number of test cases. After that <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>R</b> and <b>C</b>, the number of rows and the number of columns of the matrix <b>M</b> respectively. Thereafter <b>R</b> lines follow each containing <b>C</b> characters, the actual digital map itself.

<h3>Output</h3>
</p><p>For each test case print one line. If a "Spoon" is found in Matrix, output "There is a spoon!" else output "There is indeed no spoon!" (Quotes only for clarity).

<h3>Constraints</h3>
</p><p>
1 ≤ <b>T</b> ≤ 100
</p><p>
1 ≤ <b>R, C</b> ≤ 100

<h3>Sample Input</h3>
<pre>
3
3 6
abDefb
bSpoon
NIKHil
6 6
aaaaaa
ssssss
xuisdP
oooooo
ioowoo
bdylan
6 5
bdfhj
cacac
opqrs
ddddd
india
yucky
</pre>

<h3>Sample Output</h3>
<pre>
There is a spoon!
There is a spoon!
There is indeed no spoon!
</pre>

<h3>Explanation</h3>
In the first test case, "Spoon" occurs in the second row. In the second test case, "spOon" occurs in the last column.</p>