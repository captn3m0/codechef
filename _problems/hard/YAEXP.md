---
{"category_name":"hard","problem_code":"YAEXP","problem_name":"Yet another expected value problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"jtnydv25"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a matrix $A$ having $N$ rows and $M$ columns. You are also given an integer $K$. Initially all rows and columns are unprocessed. You initialize a variable `ans` to be $0$. You do the following experiment until all rows and columns have been processed:

- From the list of unprocessed rows and columns, choose one uniformly at random. Let the sum of this selected row/column be $S$. Add $S^K$ to `ans`.
- Mark the row/column processed, and make all of its elements $0$.

You have to print the expected value of the variable `ans` in the end. If the expected value is $E$, print the value of $X = E \times (n + m)! $ modulo $10^9 + 7$. It is guaranteed that $X$ will be an integer.

###Input:

- First line will contain $N$, $M$, and $K$
- $i^{\text{th}}$ of the next $N$ lines contains the $i^{\text{th}}$ row of the matrix, that is space separated integers $A_{i, 1}, A_{i, 2}, \cdots A_{i, M}$

###Output:
Print the value of $X$ as described in the problem staement.

###Constraints 
- $ 1 \leq N, M, K \leq 50 $
- $ 0 \leq A_{i, j} < 10^9 + 7$ 

###Sample Input 1:
```
2 2 1
1 2
2 1
```

###Sample Output 1:
```
144
```
	

###Sample Input 2:
```
2 2 2
1 2
2 1
```

###Sample Output 2:
```
368
```


###EXPLANATION:

In example $1$, $K = 1$ , hence every element is going to be added once (in either the row or the column the element belongs to). Hence $E = 6$, and $X = 6 . 4! = 144$