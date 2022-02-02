---
{"category_name":"easy","problem_code":"RICY","problem_name":"Rise of Cyborgs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"16-12-2020","tags":{"0":"bytr2020","1":"easy","2":"hackcyborg"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RICY","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RICY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Doctor Kunj installed new software on cyborg Shresth.
This software introduced Shresth to range minimum queries.

Cyborg Shresth thought of $T$ different problems in each of which you will be given
an array $A$ of length $N$ and an array $B$ of length $M$. In each of these problems, you have to calculate:

$\sum_{i=1}^m \sum_{j=i}^m rangeMin(B[i],B[j])$

Where $rangeMin(i,j)$ returns the minimum element in the range of indices $i$ to $j$ (both included) in array $A$.

It is given that array $B$ consists of pairwise distinct elements and is in ascending order.

###Input Format:

- First line will contain $T$, the number of different problems Cyborg Shresth thought of.
- Each problem's input data will be given in three different lines. 
- The first line will contain $N$ and $M$, the length of array $A$ and $B$ respectively. 
- The second line will contain $N$ space separated positive integers, which form the array $A$. - 
- The third line will contain $M$ space separated positive integers, which form the array $B$.

###Output Format:

- For each different problem, print on a new line the answer to the problem, i.e. the value of $\sum_{i=1}^m \sum_{j=i}^m rangeMin(B[i],B[j])$ .

### Constraints:
- $1 \leq T \leq {10}^5$
- $1 \leq N \leq {10}^5$
- $1 \leq M \leq {10}^5$
- $1 \leq A[i] \leq 10^9$
- $1 \leq B[i] \leq N$

It is guaranteed that the sum of $N$ over all test cases does not exceed ${10}^6$ .

### Sample Input:
```
1
7 3
10 3 7 9 1 19 2
1 4 6
```
### Sample Output:
```
43
```

###Explanation:

For the given array $A$, we have to calculate $rangeMin(1,1) + rangeMin(1,4) + rangeMin(1,6) + rangeMin(4,4) + rangeMin(4,6) + rangeMin(6,6) $.
 
This is equal to $10 + 3 + 1 + 9 + 1 +19 = 43$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>