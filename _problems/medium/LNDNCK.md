---
{"category_name":"medium","problem_code":"LNDNCK","problem_name":"Nicks Landing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LNDNCK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In a city called *Nick's Landing*, there are $N$ people (numbered $1$ through $N$). For each valid $i$, the $i$-th person has beauty $B_i$ and politeness $P_i$; no two people are equally beautiful.

You should answer $Q$ queries. In each query you are given two integers $L$ and $R$, and you should calculate $Score(L, R)$ as defined below:

```
        Score (L, R) :
            Initialize empty Lists Q, OddQ, EvenQ
            For each person with id between [L, R] : 
                add his id to List Q
            Sort Q in increasing order of the beauty value of the persons
            Flag = 0;
            For each person's id in Q : 
                Flag = 1 - Flag
                If (Flag == 1) append his id to List OddQ
                Else append his id to List EvenQ  
            Return DiffSum (OddQ) + DiffSum (EvenQ)

        DiffSum (Z[1...n]) :
            Sum = 0
            For i = 2 to n :
                u = Z[i]
                v = Z[i - 1]
                Sum = Sum + |P[u] - P[v]|
            Return Sum
```

### Input
- The first line of the input contains a single integer $N$. 
- Each of the next $N$ lines contains two space-separated integers $B_i$ and $P_i$.
- The next line contains a single integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single integer(answer to the query) in a single line.

### Constraints 
- $1 \le N, Q \le 2 \cdot 10^5$
- $1 \le B_i, P_i \le 2 \cdot 10^5$
- $1 \le L \le R \le N$
- All beauty values are **distinct**.

### Example Input
```
6
2 1
4 6
1 4
3 10
6 4
5 8
5
1 3
1 6
3 6
2 5
4 4
```

### Example Output
```
2
15
10
8
0
```
	
### Explanation
For the $2$-nd query, $Q= \{1, 2, 3, 4, 5, 6\}$.

If we sort them according to the persons's beauty value, then $Q =\{3, 1, 4, 2, 6, 5\}.$

Now, $OddQ = \{3, 4, 6\}$ and $EvenQ = \{1, 2, 5\}$
 
So, $DiffSum$ $(OddQ) = $ |$P_3$ - $P_4$| $+$ |$P_4$ - $P_6$|  $=$ $6 + 2$ $=$ $8.$  

Similiarly, $DiffSum$ $(EvenQ) =$ |$P_1$ - $P_2$| $+$ |$P_2$ - $P_5$|  $=$ $5 + 2$ $=$ $7.$  

So $Score = 7 + 8 = 15.$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>