---
{"category_name":"medium","problem_code":"LCSTSUB","problem_name":"Longest Constrained Subsequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"2-04-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given two arrays of length N. Array A = $A$<sub>1</sub>, $A$<sub>2</sub>, ..., $A$<sub>N</sub>. Array L = $L$<sub>1</sub>, $L$<sub>2</sub>, ..., $L$<sub>N</sub>. For every k such that $1 \leq k \leq N$, you have to find the length of the longest possible subsequence in the first k elements of array A such that if $A$<sub>j</sub> immediately follows $A$<sub>i</sub> in the subsequence, then $|A$<sub>j</sub>$-A$<sub>i</sub>$| \leq L$<sub>j</sub>  

Please note that the input is __encrypted__. Read Input section for information.

__It is advised to use fast I/O methods__    


###Input:
- First line contains a single integer $N$, the no of elements of the arrays.
- The i-th of the next N lines contains two values, $A’$<sub>i</sub> and $L’$<sub>i</sub>, the encrypted values of $A$<sub>i</sub> and $L$<sub>i</sub>.
Suppose that the (i-1)-th output was $Ans$<sub>i-1</sub>, then $A$<sub>i</sub> = $Ans$<sub>i-1</sub> $XOR$ $A’$<sub>i</sub>, and $L$<sub>i</sub> = $Ans$<sub>i-1</sub> $XOR$ $L’$<sub>i</sub>, where $XOR$ denotes the bitwise xor operator. Assume $Ans$<sub>0</sub> = 0. 

###Output:
Output N integers, each in a new line, the i-th of which should be the length of the longest possible subsequence uptil $A$<sub>i</sub>.

###Constraints 
- $1 \leq N \leq 10^5$
- $1 \leq A$<sub>i</sub>$ \leq 10^9$
- $1 \leq L$<sub>i</sub>$ \leq 10^9$
- $0 \leq A'$<sub>i</sub>$ \leq 2*10^9$
- $0 \leq L'$<sub>i</sub>$ \leq 2*10^9$

###Sample Input:
5  
1 1  
3 0  
6 1  
5 2  
4 0  

###Sample Output:
1  
2  
3  
3  
4  

	
###EXPLANATION:
The decrypted query is:-  
5  
1 1  
2 1  
4 3  
6 1  
7 3  
  
The largest possible subsequences are:-  
1) {1}  
2) {1,2}  
3) {1,2.4}  
4) {1,2,4}  
5) {1,2,4,7}  
