---
{"category_name":"easy","problem_code":"GOODPREF","problem_name":"Count Good Prefixes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"2-04-2018","tags":{"0":"admin2","1":"april18","2":"logic","3":"math","4":"string"},"editorial_url":"https://discuss.codechef.com/problems/GOODPREF","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/GOODPREF.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/GOODPREF.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/GOODPREF.pdf">Vietnamese</a> as well.</h3>

You are given an integer $n$ and a string $s$ consisting only of characters 'a' and 'b'. Consider a string $t = \underbrace{s + s + \dots + s}_{n\text{ times}}$, i.e. the string obtained by concatenating $n$ copies of $s$.

Find the number of non-empty prefixes of $t$ in which the number of occurrences of 'a' is strictly greater than the number of occurrences of 'b'.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains the string $s$ and the integer $n$, separated by a single space. 

### Output
For each test case, print a single line containing one integer — the number of valid prefixes.

### Constraints 
- $1 \le T \le 100$
- $1 \le |s| \le 10^3$
- $1 \le n \le 10^9$
- each character of $s$ is either 'a' or 'b'

### Subtasks
**Subtask #1 (30 points):** $1 \le n \le 10^3$

**Subtask #2 (70 points):** original constraints

### Sample Input
<pre><tt>
3
aba 2
baa 3
bba 3
</tt></pre>

### Sample Output
<pre><tt>
5
6
0
</tt></pre>
	
### Explanation
**Example case 1:** The string $t$ is "abaaba". It has five prefixes which contain more a-s than b-s: "a", "aba", "abaa", "abaab" and "abaaba".

**Example case 2:** The string $t$ is "baabaabaa". The strings "baa", "baaba", "baabaa", "baabaab", "baabaaba" and "baabaabaa" are the six valid prefixes.

**Example case 3:** The string $t$ is "bbabbabba". There is no prefix of this string which consists of more a-s than b-s. Therefore, the answer is zero.
