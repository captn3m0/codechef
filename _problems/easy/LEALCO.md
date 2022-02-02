---
{"category_name":"easy","problem_code":"LEALCO","problem_name":"Little Elephant and Alcohol","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"20-03-2012","tags":{"0":"backtracking","1":"bitmasking","2":"easy","3":"jan13","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEALCO","time":{"view_start_date":1358247023,"submit_start_date":1358247023,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Little Elephant and his friends from the Zoo of Lviv were returning from the party. But suddenly they were stopped by the policeman Big Hippo, who wanted to make an alcohol test for elephants.</p>

<p>There were <b>N</b> elephants ordered from the left to the right in a row and numbered from <b>0</b> to <b>N-1</b>. Let <b>R[i]</b> to be the result of breathalyzer test of <b>i</b>-th elephant.</p>

<p>Considering current laws in the Zoo, elephants would be arrested if there exists <b>K</b> consecutive elephants among them for which at least <b>M</b> of these <b>K</b> elephants have the maximal test result among these <b>K</b> elephants.</p>

<p>Using poor math notations we can alternatively define this as follows. The elephants would be arrested if there exists <b>i</b> from <b>0</b> to <b>N-K</b>, inclusive, such that for at least <b>M</b> different values of <b>j</b> from <b>i</b> to <b>i+K-1</b>, inclusive, we have <b>R[j] = max{R[i], R[i+1], ..., R[i+K-1]}</b>.

</p><p>The Big Hippo is very old and the Little Elephant can change some of the results. In a single operation he can add <b>1</b> to the result of any elephant. But for each of the elephants he can apply this operation at most once.</p>

<p>What is the minimum number of operations that the Little Elephant needs to apply, such that the sequence of results, after all operations will be applied, let elephants to avoid the arrest? If it is impossible to avoid the arrest applying any number of operations, output <b>-1</b>.</p>

<h3>Input</h3>
<p> The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains three space-separated integers <b>N, K, M</b>. The second line contains <b>N</b> space-separated integers <b> R[0], R[1], ..., R[N-1]</b> denoting the test results of the elephants.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of operations needed to avoid the arrest.</p>

<h3>Constraints</h3>
<ul><li><b>1</b> &le; <b>T</b> &le; <b>10</b></li>
<li><b>1</b> &le; <b>M</b> &le; <b>K</b> &le; <b>N</b> &le; <b>17</b></li>
<li><b>1</b> &le; <b>R[i]</b> &le; <b>17</b></li></ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
4
5 3 2
1 3 1 2 1
5 3 3
7 7 7 7 7
5 3 3
7 7 7 8 8
4 3 1
1 3 1 2

<b>Output:</b>
0
1
1
-1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Let's follow the poor math definition of arrest. We will consider all values of <b>i</b> from <b>0</b> to <b>N-K = 2</b>, inclusive, and should count the number of values of <b>j</b> described in the definition. If it less than <b>M = 2</b> then this value of <b>i</b> does not cause the arrest, otherwise causes.</p>
<table width="100%" border="1" cellspacing="0">
<tr>
<td><b>i</b></td>
<td><b>{R[i],...,R[i+K-1]}</b></td>
<td><b>max{R[i],...,R[i+K-1]}</b></td>
<td>For which <b>j = i, ..., i+K-1</b><br /> we have <b>R[j] = max</b></td>
<td>Conclusion</td>
</tr>
<tr>
<td><b>i=0</b></td>
<td><b>{1, 3, 1}</b></td>
<td><b>max = 3</b></td>
<td><b>R[j] = 3</b> for <b>j = 1</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=1</b></td>
<td><b>{3, 1, 2}</b></td>
<td><b>max = 3</b></td>
<td><b>R[j] = 3</b> for <b>j = 1</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=2</b></td>
<td><b>{1, 2, 1}</b></td>
<td><b>max = 2</b></td>
<td><b>R[j] = 2</b> for <b>j = 3</b></td>
<td>does not cause the arrest</td>
</tr>
</table>
<p>So we see that initial test results of the elephants do not cause their arrest. Hence the Little Elephant does not need to apply any operations. Therefore, the answer is 0.</p>

<p><b>Example case 2.</b>We have <b>N = 5</b>, <b>K = 3</b>, <b>M = 3</b>. Let's construct similar table as in example case 1. Here the value of <b>i</b> will cause the arrest if we have at least <b>3</b> values of <b>j</b> described in the definition.</p>
<table width="100%" border="1" cellspacing="0">
<tr>
<td><b>i</b></td>
<td><b>{R[i],...,R[i+K-1]}</b></td>
<td><b>max{R[i],...,R[i+K-1]}</b></td>
<td>For which <b>j = i, ..., i+K-1</b><br /> we have <b>R[j] = max</b></td>
<td>Conclusion</td>
</tr>
<tr>
<td><b>i=0</b></td>
<td><b>{7, 7, 7}</b></td>
<td><b>max = 7</b></td>
<td><b>R[j] = 7</b> for <b>j = 0, 1, 2</b></td>
<td>causes the arrest</td>
</tr>
<tr>
<td><b>i=1</b></td>
<td><b>{7, 7, 7}</b></td>
<td><b>max = 7</b></td>
<td><b>R[j] = 7</b> for <b>j = 1, 2, 3</b></td>
<td>causes the arrest</td>
</tr>
<tr>
<td><b>i=2</b></td>
<td><b>{7, 7, 7}</b></td>
<td><b>max = 7</b></td>
<td><b>R[j] = 7</b> for <b>j = 2, 3, 4</b></td>
<td>causes the arrest</td>
</tr>
</table>
<p>So we see that for initial test results of the elephants each value of <b>i</b> causes their arrest. Hence the Little Elephant needs to apply some operations in order to avoid the arrest. He could achieve his goal by adding <b>1</b> to the result <b>R[2]</b>. Then results will be <b>{R[0], R[1], R[2], R[3], R[4]} = {7, 7, 8, 7, 7}</b>. Let's check that now elephants will be not arrested.</p>
<table width="100%" border="1" cellspacing="0">
<tr>
<td><b>i</b></td>
<td><b>{R[i],...,R[i+K-1]}</b></td>
<td><b>max{R[i],...,R[i+K-1]}</b></td>
<td>For which <b>j = i, ..., i+K-1</b><br /> we have <b>R[j] = max</b></td>
<td>Conclusion</td>
</tr>
<tr>
<td><b>i=0</b></td>
<td><b>{7, 7, 8}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 2</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=1</b></td>
<td><b>{7, 8, 7}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 2</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=2</b></td>
<td><b>{8, 7, 7}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 2</b></td>
<td>does not cause the arrest</td>
</tr>
</table>
<p>So we see that now test results of the elephants do not cause their arrest. Thus we see that using 0 operations we can't avoid the arrest but using 1 operation can. Hence the answer is 1.</p>

<p><b>Example case 3.</b>We have <b>N = 5</b>, <b>K = 3</b>, <b>M = 3</b>. Let's construct similar table as in example case 1. Here the value of <b>i</b> will cause the arrest if we have at least <b>3</b> values of <b>j</b> described in the definition.</p>
<table width="100%" border="1" cellspacing="0">
<tr>
<td><b>i</b></td>
<td><b>{R[i],...,R[i+K-1]}</b></td>
<td><b>max{R[i],...,R[i+K-1]}</b></td>
<td>For which <b>j = i, ..., i+K-1</b><br /> we have <b>R[j] = max</b></td>
<td>Conclusion</td>
</tr>
<tr>
<td><b>i=0</b></td>
<td><b>{7, 7, 7}</b></td>
<td><b>max = 7</b></td>
<td><b>R[j] = 7</b> for <b>j = 0, 1, 2</b></td>
<td>causes the arrest</td>
</tr>
<tr>
<td><b>i=1</b></td>
<td><b>{7, 7, 8}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 3</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=2</b></td>
<td><b>{7, 8, 8}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 3, 4</b></td>
<td>does not cause the arrest</td>
</tr>
</table>
<p>So we see that for initial test results of the elephants the value of <b>i = 0</b> causes their arrest. Hence the Little Elephant needs to apply some operations in order to avoid the arrest. He could achieve his goal by adding <b>1</b> to the result <b>R[1]</b>. Then results will be <b>{R[0], R[1], R[2], R[3], R[4]} = {7, 8, 7, 8, 8}</b>. Let's check that now elephants will be not arrested.</p>
<table width="100%" border="1" cellspacing="0">
<tr>
<td><b>i</b></td>
<td><b>{R[i],...,R[i+K-1]}</b></td>
<td><b>max{R[i],...,R[i+K-1]}</b></td>
<td>For which <b>j = i, ..., i+K-1</b><br /> we have <b>R[j] = max</b></td>
<td>Conclusion</td>
</tr>
<tr>
<td><b>i=0</b></td>
<td><b>{7, 8, 7}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 1</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=1</b></td>
<td><b>{8, 7, 8}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 1, 3</b></td>
<td>does not cause the arrest</td>
</tr>
<tr>
<td><b>i=2</b></td>
<td><b>{7, 8, 8}</b></td>
<td><b>max = 8</b></td>
<td><b>R[j] = 8</b> for <b>j = 3, 4</b></td>
<td>does not cause the arrest</td>
</tr>
</table>
<p>So we see that now test results of the elephants do not cause their arrest. Thus we see that using 0 operations we can't avoid the arrest but using 1 operation can. Hence the answer is 1. Note that if we increase by 1 the result <b>R[2]</b> instead of <b>R[1]</b> then the value <b>i = 2</b> will cause the arrest since <b>{R[2], R[3], R[4]}</b> will be <b>{8, 8, 8}</b> after this operation and we will have 3 values of <b>j</b> from <b>2</b> to <b>4</b>, inclusive, for which <b>R[j] = max{R[2], R[3], R[4]}</b>, namely, <b>j = 2, 3, 4</b>.</p>

<p><b>Example case 4.</b> When <b>M = 1</b> the Little Elephant can't reach the goal since for each value of <b>i</b> from <b>0</b> to <b>N-K</b> we have at least one value of <b>j</b> for which <b>R[j] = max{R[i], R[i+1], ..., R[i+K-1]}</b>.</p>