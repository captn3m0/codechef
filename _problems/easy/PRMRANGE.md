---
{"category_name":"easy","problem_code":"PRMRANGE","problem_name":"A Game of Primes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vishal_nnd0","problem_tester":null,"date_added":"15-04-2019","tags":{"0":"vishal_nnd0"},"time":{"view_start_date":1556307900,"submit_start_date":1556307900,"visible_start_date":1556307900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Given an empty array **A** of infinite length and a positive integer **K** you have to process 
**Q** queries of type:    
- **! l r x**: Fill the value **x** in all the **empty places** in the array from index **l** to **r**  (both inclusive).
- **? l r**: Print the number of prime factors of **K** which is also a prime factor of *at least* one number in *A[l], A[l + 1], A[l + 2], … A[r]*.   

###Input

- The first line contains two space separated integers **K** and **Q** respectively.
- Then **Q** lines follow:
- Each of the *$i^{th}$* line contains one of the above two types of queries.

###Output

For each query of the second type, print in a new line the answer to that query. i.e. number of prime factors of **K** which is also a prime factor of *at least* one number in *A[l], A[l + 1], A[l + 2], … A[r]*.   

###Constraints 

- $1 \leq K, x \leq 10^9$
- $ 1 \leq l \leq r \leq 10^5$
- $ 1 \leq Q \leq 10^5$   

###Sample Input

20 5   
? 1 5   
! 3 5 4   
? 1 5   
! 1 4 15   
? 1 5   

###Sample Output
0   
1   
2   

###EXPLANATION
Initially, all the places in the array are empty. i.e _ _ _ _ _   
After first update the array looks like: _ _ 4 4 4    
In the range [1, 5] the only factor of 20 which is also a prime factor of at least one number in _ _ 4 4 4  is 2.   
After the second update the array looks like: 15 15 4 4 4   
In the range [1, 5] the prime factors of 20 i.e. 5 is a prime factor of 15, 15 and 2 is the prime factor of 4, 4, 4.

