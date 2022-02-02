---
{"category_name":"school","problem_code":"KOL16B","problem_name":"Extreme Encoding","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Lajuk is a little girl who loves playing with array. In her 10th birthday, she got two arrays as presents. Let’s call them <b>A</b> and <b>B</b>. Both arrays have the same size <b>n</b> and contains integers between <b>0</b> to <b>30000</b>.</p>

<p>Lajuk’s hard-drive is almost full of presents and she barely has any space to keep the arrays. She discovered a brilliant function to merge the array into one:
<pre>

int encodeInteger(int x, int n){
	n = n&lt;&lt;(1&lt;&lt;(1&lt;&lt;(1&lt;&lt;1)));
	x = x | n;
	return x;
}
void encodeArray(int *A, int *B, int n){
	for(int i=0;i&lt;n;i++) {
    	    A[i] = encodeInteger(A[i], B[i]);
	}
}
</pre>
</p>

<p>Lajuk passed <b>A</b> and <b>B</b> into the encodeArray function. After that she discarded array <b>B</b> and saved the modified version of array <b>A</b> in the hard-drive. </p>

<p>Now in her 15th birthday Lajuk wants to play with those arrays again. She found the modified version of array A in the hard-drive but she forgot how to recover the original arrays from it. Being upset, she asked for your help. Can you help her to recover the original arrays?</p>

<h3>Input</h3>
<p>The first line contains <b>T (1 ≤ T ≤ 100)</b>, the number of test cases. The first line of each test cases contains <b>n (1 ≤  n ≤  10<sup>4</sup>)</b>, the size of the array. Next <b>n</b> line contains <b>n</b> integers denoting the modified array <b>A</b>.</p>

<h3>Output</h3>
<p>For each case print the case number in the first line. In the second line, print n integers denoting the original array <b>A</b>. In the third line print n integers denoting the array <b>B</b>. Two consecutive  integers should be separated by a single space.</p>

<h3>Sample </h3>
<pre>
<b>Input</b>
1
4
196613
655370
196620
131079

<b>Output</b>
Case 1:
5 10 12 7
3 10 3 2
</pre>



