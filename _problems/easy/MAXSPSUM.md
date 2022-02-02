---
{"category_name":"easy","problem_code":"MAXSPSUM","problem_name":"Maximum Special Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"vishal_nnd0","problem_tester":null,"date_added":"23-04-2019","tags":{"0":"vishal_nnd0"},"time":{"view_start_date":1556307900,"submit_start_date":1556307900,"visible_start_date":1556307900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given an array of size $N$ and two integers $K$ and $S$, the special sum of a subarray is defined as follows:      
(Sum of all elements of the subarray) * ($K$ - $p$ * $S$)       
Where $p$ = number of distinct prime factors of “product of all elements of the subarray”.    
Find the maximum special sum by considering all non-empty subarrays of the given array.

###Input

- First line contains 3 integers $N$, $K$ and $S$.     
- Second line contains $N$ integers, the elements of the array.  

###Output

Output a single integer. The maximum special sum considering all non-empty subarrays of the array.

###Constraints:

- $ 1 \leq N, K, S \leq 10^5 $      
- $ 0 \leq K / S \leq 20 $   
- $ 1 \lt $ Any element of array $ \lt 10^5 $

###Sample Input

4 10 2    
14 2 7 15

###Sample Output

138

###Sample Explanation

Consider the subarray {14, 2, 7}      
Total number of distinct prime factors in it is 2 (2 and 7).    
Therefore, value of special sum is (14 + 2 + 7) * (10 - 2 * 2) = 138.    
This is the subarray with the maximum special sum.

