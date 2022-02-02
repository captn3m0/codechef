---
{"category_name":"easy","problem_code":"ISBIAS","problem_name":"Equality","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":null,"date_added":"19-11-2019","tags":{"0":"easy","1":"jan20","2":"observation","3":"sahi1422","4":"sahi1422","5":"vijju123"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ISBIAS","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ISBIAS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/ISBIAS.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/ISBIAS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/ISBIAS.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/ISBIAS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/ISBIAS.pdf) as well.

Chef Aditi keeps changing the flavours of her dishes and she wants to analyse feedback from her customers in order to improve her performance. The customers visiting Aditi's restaurant can rate the food online and Aditi knows an aggregated rating for each day. As she is busy cooking, you should perform the data analysis.

You are given a sequence $A_1, A_2, \ldots, A_N$ of distinct integers denoting the customers' feedback during $N$ days. You should process $Q$ queries. In each query, you are given two integers $L$ and $R$. Consider any contiguous subsequence $A_p, A_{p+1}, \ldots, A_q$, where $L \le p < q \le R$; let's call it a *maximal increasing subsequence* if the following conditions hold:
- $A_p \lt A_{p+1} \ldots \lt A_q$
- if $p \gt L$, then $A_p \lt A_{p-1}$
- if $q \lt R$, then $A_q \gt A_{q+1}$

Similarly, let's define a *maximal decreasing subsequence*. You should find out if the number of maximal increasing subsequences is equal to the number of maximal decreasing subsequences (with $L \le p < q \le R$).

For example, if $A = (10, 20, 30, 5)$, we can see that the only maximal increasing subsequence of this sequence (for $L=1$ and $R=N$) is $(10, 20, 30)$, since $(10, 20)$ does not satisfy the third condition and $(20, 30)$ does not satisfy the second condition, and there is only one maximal decreasing subsequence $(30, 5)$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing the string `"YES"` if the number of maximal increasing contiguous subsequences is equal to the number of maximal decreasing contiguous subsequences or `"NO"` otherwise (without quotes).

### Constraints
- $2 \le N \le 10^5$
- $1 \le Q \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le L \lt R \le N$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct

### Subtasks
**Subtasks #1 (20 points):** $Q \le 50$

**Subtasks #2 (80 points):** original constraints

### Example Input 1
```
4 3
1 3 2 4
1 4
2 3
2 4
```

### Example Output 1
```
NO
NO
YES
```

### Explanation 1
For the first query, there are two maximal increasing subsequences $(1, 3)$ and $(2, 4)$, but only one maximal decreasing subsequence $(3, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>