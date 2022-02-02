---
{"category_name":"hard","problem_code":"PALSTR","problem_name":"Chef And Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"antoniuk1","date_added":"2-11-2015","tags":{"0":"cook66","1":"dynamic","2":"ma5termind","3":"medium","4":"palindrome","5":"strings","6":"z"},"editorial_url":"http://discuss.codechef.com/problems/PALSTR","time":{"view_start_date":1453660200,"submit_start_date":1453660200,"visible_start_date":1453660200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/mandarin/PALSTR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/russian/PALSTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/vietnamese/PALSTR.pdf">Vietnamese</a> as well.</h3>
<p>Chef's love for symmetry is well-known. This love is especially expressed for palindromic strings. Today, he has a triplet of strings, &lt;<b>A</b>, <b>B</b>, <b>C</b>>, where each string is consisting of lowercase characters. He is interested in counting the number of ordered triplet of strings &lt;<b>S<sub>1</sub>, S<sub>2</sub>, S<sub>3</sub></b>> such that <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, and <b>S<sub>3</sub></b> are non-empty substrings of <b>A</b>, <b>B</b>, and <b>C</b>, respectively, and <b>S<sub>1</sub> + S<sub>2</sub> + S<sub>3</sub></b> is a palindromic string, with '+' denoting the string concatenation operator.</p>
<p>Note that <b>2</b> triplets are considered to be different if any substring chosen from a string in <b>1</b> triplet is different from the substring chosen from the same string in other triplet. You can check the definition of a substring <a href="https://en.wikipedia.org/wiki/Substring">here</a>.</p>
<p><b>Note:</b></p>
<p>A string <b>S</b> is palindromic if it reads the same both forward as well as backward. To know more about palindromes, click <a href="https://en.wikipedia.org/wiki/Palindrome">here</a>.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. First line of each test case contains the string <b>A</b>, second line contains the string <b>B</b>, and the third contains the string <b>C</b>.</p>
<h3>Output</h3>
<p>For each test case, output the required answer.</p>
<h3> Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 20</li>
<p></p></b><br />
<b>
<li>1 ≤ |A|, |B|, |C| ≤ 1000</li>
<p></p></b><br />
<b>
<li> A, B &amp; C consist of lowercase characters only.</li>
<p></p></b>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
4
a
b
c
ab
ba
ab
ab
ab
ab
aa
aa
aa
</pre><p>
<b>Output</b></p>
<pre>
0
6
8
27
</pre><h3>Explanation</h3>
<ul>
<li><b>Test 1: </b> No such palindromic string is possible.</li>
<li><b>Test 2: </b> "aaa", "bbb", "aba", "bab", "abba", "baab" are all possible palindromic strings.</li>
<li><b>Test 3: </b> "aaa", "bbb", "aba", "bab", "abba", "baab", "babab", "ababa" are all possible palindromic strings.</li>
</ul>
