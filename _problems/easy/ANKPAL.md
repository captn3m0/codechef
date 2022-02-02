---
{"category_name":"easy","problem_code":"ANKPAL","problem_name":"Palindromic Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":null,"date_added":"6-06-2015","tags":{"0":"code_master01","1":"snck15el"},"editorial_url":"http://discuss.codechef.com/problems/ANKPAL","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/ANKPAL.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/ANKPAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/ANKPAL.pdf">Vietnamese</a></h3>



<p>Mark has recently started studying string algorithms. So, as to gauge his knowledge, Lucy challenges him to a task.</p>
<p>"Given a string <strong>s</strong>, answer several times a query to determine whether a <em>substring</em> <strong>s[i, j]</strong> (inclusive) is palindromic or not.", said Lucy in a confident tone!</p>
<p>As smart as Mark is, he was able to instantly find the solution!</p>
<p>Now, Mark has challenged little Lucy to do the same task by reversing a specific substring beforehand. As Lucy is still just a novice, she asks for your help.</p>
<p>You have to write a program that answers <strong>Q</strong> queries on a string <strong>S</strong>.</p>
<p>Each query contains four integers (<strong>i</strong>, <strong>j</strong>, <strong>k</strong>, <strong>l</strong>).
For every query, first reverse the <em>substring</em> <strong>s[i, j]</strong> (inclusive) and then report if <em>substring</em> <strong>s[k, l]</strong> (inclusive) is a palindrome.</p>
<p>Note that the reversal operations are only for the specific query and should not persist for further queries. Please check the explanation section for better understanding.</p>
<h3>Input:</h3>
<p>The first line of input file contains string <strong>S</strong>. The next line contains an integer <strong>Q</strong>.<br />
Each of the following <strong>Q</strong> lines each contain 4 space separated integers <strong>i, j, k and l.</strong></p>
<h3>Output:</h3>
<p>Output exactly <em>Q</em> lines, each containing the result of corresponding query as <em>"Yes"</em> or <em>"No"</em>.</p>
<h3>Constraints:</h3>
<strong>
<ul>
<li>1 ≤ |S| ≤ 10<sup>5</sup>  
</li>
<li>1 ≤ Q ≤ 333333
</li>
<li>1 ≤ i ≤ j ≤ |S|  
</li>
<li>1 ≤ k ≤ l ≤ |S|</li>
<li>S contains only the characters 'a' to 'z'</li>
</ul>
</strong>
<h3>Example:</h3>
<p><strong>Sample Input:</strong></p>
<pre>
ababa
4
2 3 3 4
1 2 3 4
1 3 3 5
2 4 1 5

</pre>
<p><strong>Sample Output:</strong></p>
<pre>
Yes
No
Yes
Yes
</pre>
<h3>Explanation:</h3>
<p><strong>Query 1:</strong>
The string becomes a<strong>ab</strong>ba. The queried substring  is <em>bb</em>, which is a palindrome.</p>
<p><strong>Query 2:</strong>
The string becomes <strong>ba</strong>aba. The queried substring is <em>ab</em>, which is not a palindrome.</p>
<p><strong>Query 3:</strong>
The string becomes <strong>aba</strong>ba. The queried substring is <em>aba</em>, which is a palindrome.</p>
<p><strong>Query 4:</strong>
The string becomes a<strong>bab</strong>a. The queried substring is <em>ababa</em>, which is a palindrome.</p>
<h3>Notes:</h3>
<ul>
<li>Here, a substring [i, j] is defined as the string formed by characters s[i], s[i+1],..., s[j].</li>
<li>A palindrome is a sequence of characters which reads the same backward or forward. For example, <strong>aba</strong>, <strong>abba</strong> are palindromes, while <strong>abab</strong> and <strong>abcd</strong> are not palindromes.</li>
</ul>