---
{"languages_supported":{"0":"NA"},"title":"NONPALIN","category":"NA","old_version":true,"problem_code":"NONPALIN","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><div class="primary-colum-width-left">
<div class="prob">
<p>For the given string <b>S</b> of length <b>N</b> you need to find for each <b>L</b> from <b>1</b> to <b>N</b> the first non-palindrome substring of <b>S</b> that has length <b>L</b>. That is, for each <b>L</b> from <b>1</b> to <b>N</b> you need to find the smallest positive integer <b>K &lt;= N - L + 1</b> such that the string <b>S[K, K + L - 1]</b> is not a palindrome. Denote this number by <b>K(L)</b>. Here <b>S[i, j]</b> stands for the substring of <b>S</b> composed of its characters in positions <b>i, i + 1, ..., j</b>. Characters of <b>S</b> are numbered from <b>1</b> to <b>N</b>. If for some <b>L</b> there is no such <b>K</b> set <b>K(L) = 0</b>. After you find all numbers <b>K(1), K(2), ..., K(N)</b> output the following sum</p>
<span class="anton-center"><b> 100007<sup>N - 1</sup> * K(1) + 100007<sup>N - 2</sup> * K(2) + ... + 100007 * K(N - 1) + K(N)</b> </span> <br /> modulo <b>2<sup>64</sup></b>. <br /><br /> <b>Remark.</b> The string is called a palindrome if it coincides with its reverse. So <b>abacaba</b> and <b>abba</b> are palindromes but <b>codechef</b> and <b>abbc</b> are not.
<p> </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty  string composed only of lowercase letters of the English alphabet.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the corresponding sum constructed by numbers <b>K(1), K(2), ..., K(N)</b> as mentioned in the problem statement modulo <b>2<sup>64</sup></b>.</p>
<h3>Constraints</h3>
<p><b> 1 &lt;= T &lt;= 20 <br /> 1 &lt;= length of S &lt;= 100000 </b></p>
<h3>Example</h3>
<pre><b>Input:</b>
4
abacaba
abba
codechef
aaaa

<b>Output:</b>
12789123637940213592
10001500056
18134494634143926857
0
</pre>
<h3>Explanation</h3>
Actual values of <b>K(1), K(2), ..., K(N)</b> in the tests are: <br />abacaba: {0, 1, 2, 1, 1, 1, 0} <br />abba: {0, 1, 1, 0} <br />codechef: {0, 1, 1, 1, 1, 1, 1, 1}</div>
</div>
<p>aaaa: {0, 0, 0, 0}</p>    