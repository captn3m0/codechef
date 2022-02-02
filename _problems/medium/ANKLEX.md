---
{"category_name":"medium","problem_code":"ANKLEX","problem_name":"Lex Next","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":null,"date_added":"5-04-2015","tags":{"0":"code_master01","1":"snck15el"},"editorial_url":"http://discuss.codechef.com/problems/ANKLEX","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/ANKLEX.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/ANKLEX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/ANKLEX.pdf">Vietnamese</a></h3>


<p>Lucy has been gifted a string <strong>S</strong>, by her best friend. Now, She is going to write all the sub-strings of different lengths on different pages of her diary. So, she writes the sub-strings of length 1 on page 1, substrings of length 2 on page 2 and so on.</p>
<p>While writing out the sub-strings, she notices that several of them are repeated. She gets frustrated from writing the same string several times, and asks for Mark's help.</p>
<p>He suggests that she should write them in sorted order. But, Mark isn't so proficient with strings that he can help her to get this work done quickly.</p>
<p>Now, you have to write a program to help her. Lucy shall tell you the index and length of the last substring that she has written. You must output the index of the next substring that she should write on the same page. it is possible that all substrings of the given length have already been written, so your program should notify her of the same by printing -1. Here. the index of a substring refers to index of the first character of the said string</p>
<p>Note that the next substring to be written may be present at more than one indices, you should output the smallest index so that it is easier for Lucy to find it. Note that you should never tell her to write the same substring again.</p>
<h3>Input:</h3>
<p>The first line shall contain the string <strong>S</strong>. The next line contains integer <strong>Q</strong>, the number of times Lucy asks for your help.<br />
Each of the next <strong>Q</strong> lines, contain two space-separated integers <strong>idx</strong> and <strong>len</strong>, denoting the index and length of the substring that she has already written. Please understand that each of the <strong>Q</strong> lines represent an independent request.</p>
<h3>Output:</h3>
<p>Output exactly <strong>Q</strong> lines, each containing the required index.</p>
<h3>Constraints:</h3>
<strong>
<ul>
<li>1 ≤ |S| ≤ 10<sup>5</sup></li>
<li>1 ≤ Q ≤ 10<sup>5</sup></li>
<li>1 ≤ idx ≤ |S|</li>
<li>1 ≤ len ≤ |S| - idx + 1</li>
<li>S contains only the characters 'a' to 'z'</li>
</ul>
</strong>
<h3>Example:</h3>
<p><strong>Input:</strong></p>
<pre>
abcb
4
1 1
1 2
2 3
2 2

</pre>
<p><strong>Output:</strong></p>
<pre>
2
2
-1
3
</pre>
<h3>Explanation</h3>
<p><strong>Request 1:</strong><br />
The last written substring was <strong>a</strong>, so the next substring should be <strong>b</strong>, which is present at index 2 as well as index 4.<br />
However, we should print 2 as it is the smaller index.</p>
<p><strong>Request 2:</strong><br />
The last written substring was <strong>ab</strong>.
Amongst the substrings of length 2, <strong>bc</strong> and <strong>cb</strong> are possible candidates, but <strong>bc</strong> is lexicographically smaller, so it should be the substring to be written next, so as to maintain sorted order.<br />
Thus, we should output index 2.</p>
<p><strong>Request 3:</strong>
The last written substring was <strong>bcb</strong>. There is no substring of length 3 that follows this substring in lexicographical order.  The only other substring of length 3 is <strong>abc</strong>, which is smaller and would have already occured.<br />
Thus, there is no substring to be written next, and we should output -1.</p>
<p><strong>Request 4:</strong><br />
Try to figure this out yourself.</p>