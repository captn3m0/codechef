---
{"category_name":"easy","problem_code":"LIKECS03","problem_name":"Infinite OR Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":"kingofnumbers","date_added":"8-09-2017","tags":{"0":"bitwise","1":"cook86","2":"easy","3":"greedy","4":"likecs","5":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/LIKECS03","time":{"view_start_date":1505673000,"submit_start_date":1505673000,"visible_start_date":1505673000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS03.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/russian/LIKECS03.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS03.pdf">Vietnamese</a> as well.</h3>

<p>Chef Tobby is trying to run a code given to him by Bhuvan for an experiment they want to include in the manuscript to be submitted to a conference. The deadline to submit the manuscript is within a couple of hours and Chef Tobby needs to finish the experiments before then.</p>

<p>The code given by Bhuvan is the following which runs given an array of <b>N</b> integers and another integer <b>K</b> :</p>

<code>
<pre>
void recurse ( array a, int n )
{
	// n = size of array
	define array b currently empty
	consider all 2^n subsets of a[]
	{
		x = bitwise OR of elements in the subsets
		add x into "b" if it is not present yet
	}
	if (sizeof( b ) == 1 << k)
	{
		printf(“Won”);
		return;
	}
	recurse ( b, sizeof( b ) );
}

</pre>
</code>

<p>Chef Tobby tried to run an experiment with only one integer in the array with value 2 and K = 3. To his horror, he found out that the algorithm is resulting in an infinite loop. He is livid with the possibility that the algorithm can lead to infinite loops for certain cases. On closer inspection he determines that it might be possible to insert additional elements in the initial array to subvert the problem. Since time is very less, Chef Tobby would like to insert the minimum number of elements.</p>

<p>Chef Tobby has to finish writing the paper, so he asks his graduate student Leamas to fix it. Leamas has no idea how to fix the problem so he asks you for help.</p>

<h3>Input section</h3>
<p>The first line contains <b>T</b>, the number of test cases.</p>

<p>Each test case consists of 2 lines. The first line contains <b>2</b> integers <b>N</b> and <b>K</b>, denoting the number of elements in the array and parameter mentioned in problem statement.</p>

<p>Next line contains <b>N</b> space separated integers, denoting the elements of the array.</p>

<h3>Output section</h3>
<p>Output the minimum number of elements that need to be inserted so that inifinite loop can be avoided.</p>

<h3>Input constraints</h3>
<pre>
1 ≤ T ≤ 10
1 ≤ Sum of N over all test cases ≤ 10<sup>5</sup>
1 ≤ K ≤ 20
0 ≤ A[i] ≤ 2<sup>K</sup>-1, where A[i] denotes the i<sup>th</sup> element of the array.
</pre>

<h3>Sample Input - 1</h3>
<pre>
1
2 2
3 1
</pre>

<h3>Sample Output - 1</h3>
<pre>
1
</pre>

<h3>Explanation - 1</h3>
<p>You can win the game by inserting the element <b>2</b> into the array.</p>

<h3>Sample Input - 2</h3>
<pre>
1
7 3
3 7 5 4 6 2 1
</pre>

<h3>Sample Output - 2</h3>
<pre>
0
</pre>

<h3>Explanation - 2</h3>
<p>The initial array will result will terminate in the first step of algorithm only. Thus there is no need to insert any new element.</p>