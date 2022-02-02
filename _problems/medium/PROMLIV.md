---
{"category_name":"medium","problem_code":"PROMLIV","problem_name":"I Promised to Fight for the Living","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"shivamg_isc","problem_tester":null,"date_added":"4-04-2019","tags":{"0":"shivamg_isc"},"time":{"view_start_date":1554669000,"submit_start_date":1554669000,"visible_start_date":1554669000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>**Jaime Lannister** has abandoned his sister and lover **Cersei**, and now has come to Winterfell to fight against **the army of the dead**.  

He along with others has to study the weaknesses of White Waker Army.  

This can be done by monitoring $N$ strings. The $N$ strings are $A_1, A_2, \ldots, A_N$. $A_i$ is said to be the string with index $i$.
He with Bronn has to make a **set S comprising all substrings of all of the $N$ strings**.     
**Note - Set always comprises unique elements.**   

Let's say there are 2 strings **abad** and **abab**.   
**Set S** will be **{ abad, aba, ab, a, bad, ba, b, ad, bab, d, abab }**.      

Also, each substring mentioned in set **S** has **parent strings**, where each parent string is 
one of the initial $N$ strings.
If $B$ is an element of $S$, then $A_i$ is **parent string** of $B$ if $B$ is substring of $A_i$.      
In the above mentioned example **ab** has both **abab** and **abad** as its parent strings. **bad** has just **abad** as its parent string.    

 Jaime has to handle $Q$ different queries on these strings.     
Each query is of the following form -  
$X$ $Y$      
Here $X (1\leq X \leq N)$ denotes the index of string among the $N$ given strings.

He has to answer the following for each given query :     


1. Consider the set S described above. Compute the Longest Common Prefix (LCP) of each of the substring in this set with $A_X$. Find the **number of those substrings which have this LCP of length $\geq Y$**.    
2. Consider the **parent strings** for each of the substrings which satisfy the criteria in 1) mentioned above. **Among all such parent strings, find the lexicograhpically smallest one.** In the example mentioned above - Let's say **ab** and **bad** satisfy the criteria in 1), then lexicographically smallest among the parent strings **(abab, abad)** of these both  **(ab,bad)** will be **abab**.   If there are multiple lexicographically smallest parent strings, find the one with the **smallest index** and output this index.
3. Consider the **parent strings** for each of the substrings which satisfy the criteria in 1) mentioned above. **Among all such parent strings, find the lexicograhpically largest one.** In the example mentioned above - Let's say **ab** and **bad** satisfy the criteria in 1), then lexicographically largest among the parent strings **(abab, abad)** of these both  **(ab,bad)** will be **abad**.   If there are multiple lexicographically largest parent strings, find the one with the **largest index**.

Help Jaime find the answer to all three of them for each of the query.     


###Input:

- First line will contain $N$, number of string.
- $N$ lines follow, the i-th line containing $A_i$.  
- Next line comprises $Q$ - the number of queries.  
- $Q$ lines follow. Each line has 2 space separated integers  - $X$ and $Y$ as described above.

###Output:
For each query, output three space separated integers as described above on a separate line.  
**If for 2) and 3), there are no parent strings, print -1 for both 2) and 3) values.**

###Constraints 
- Strings have lowercase characters ['a'-'z']
- $1 \leq N \leq 10^5$
- 1 $\leq |A_i| \leq 10^5$
- Sum of length of all strings $\leq 10^6$  
- $1 \leq Q \leq 10^5$  
- $1 \leq X \leq N$
- $1 \leq Y \leq$ Sum of length of all strings

###Sample Input:
4  
abad  
abab  
abab  
abad  
2  
1 1  
2 2  


###Sample Output:
6 2 4   
4 2 4  
	
###EXPLANATION:   
For 1st query, $A_1$ is **abad**. The substrings in set $S$ which have LCP>=1 with **abad** are **{a, ab, aba, abad, abab, ad}**.   
The parent strings of **a** = abad (index 1), abab (index 2), abab (index 3), abad (index 4).   
The parent strings of **ab** = abad (index 1), abab (index 2), abab (index 3), abad (index 4).     
The parent strings of **aba** = abad (index 1), abab (index 2), abab (index 3), abad (index 4).     
The parent strings of **abad** = abad (index 1), abad (index 4).    
The parent strings of **abab** = abab (index 2), abab (index 3).  
The parent strings of **ad** = abad (index 1), abad (index 4).      
Among all of these parent strings, **lexicographically smallest** are abab (index 2) and abab(index 3). The smallest of these indices is 2.     
Among all of these parent strings, **lexicographically largest** are abad (index 1) and abad(index 4). The largest of these indices is 4.     