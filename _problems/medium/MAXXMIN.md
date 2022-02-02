---
{"category_name":"medium","problem_code":"MAXXMIN","problem_name":" XOR maximum-minimum matrices","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 3 3\r\n1 2 1\r\n0 3 0\r\n2 1 2","output":120,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"karpovich","problem_tester":"","date_added":"20-05-2021","tags":{"0":"combinatorics","1":"cook129","2":"karpovich","3":"medium","4":"pointers"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXXMIN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXXMIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/MAXXMIN.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/MAXXMIN.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/MAXXMIN.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/MAXXMIN.pdf) as well.

Chef has an integer matrix $A$ of $N$ rows and $M$ columns, and an integer $X$.

A **submatrix** is defined as a rectangle of values inside $A$. More formally, given two intervals $[l, r]$ and $[L, R]$, the corresponding submatrix consists of the values $a_{ij}$ such that $l\le i\le r$ and $L\le j\le R$. Two submatrices are considered different if one of the ranges $[l,r]$ or $[L,R]$ differs.

Chef uses $f(X)$ to denote the total number of submatrices $B$ in which $$\max(B) \oplus \min(B)=X,$$

where $\oplus$ denotes bitwise XOR, $\max(B)$ denotes the maximum integer in $B$, and $\min(B)$ denotes the minimum integer in $B$.

Chef does not know in which order he would like to put the rows. He wishes to know the value of $f(X)$ for every permutation of rows, but since the amount of them can be too large, he wants to know the sum of the answers over all permutations.

###Input

- The first line contains three space-separated integers $N$, $M$ and $X$.
- Next $N$ lines contains $M$ integers each: the $j$-th integer of the $i$-th line $A_{ij}$.

###Output

Output the sum of $f(X)$ over all permutations of the rows of $A$.

###Constraints 
- $1 \leq N \leq  8$
- $1 \leq M \leq 10^5$
- $0 \leq X, A_{ij} \leq 10^9$

###Sample Input
```
3 3 3
1 2 1
0 3 0
2 1 2
```

###Sample Output
```
120
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>