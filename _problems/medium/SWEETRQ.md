---
{"category_name":"medium","problem_code":"SWEETRQ","problem_name":"Sweet Rectangles","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 3\r\n3 5 1\r\n2 9 6\r\n8 7 4\r\n4\r\n2 2 0\r\n2 1 10\r\n3 2 11\r\n1 3 9","output":"3\r\n4\r\n3\r\n4\r\n6","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"demidenko","problem_tester":"","date_added":"14-12-2020","tags":{"0":"cook125","1":"demidenko","2":"medium","3":"rajarshi_basu"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/SWEETRQ","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SWEETRQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/SWEETRQ.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/SWEETRQ.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/SWEETRQ.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/SWEETRQ.pdf) as well.

Chef recently finished a birthday cake, which can be represented by a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). For each valid $i$, Chef placed a candle with height $a_{i,j}$ in the cell in row $i$ and column $j$.

A rectangle with the top left corner in row $r_1$ and column $c_1$ and the bottom right corner in row $r_2$ and column $c_2$ ($1 \le r_1 \lt r_2 \le N$; $1 \le c_1 \lt c_2 \le M$) is called *sweet* if the minimum of heights of candles on some two opposite corners is greater than the maximum of heights of candles on the other two opposite corners. Formally, one of the following conditions should hold:
- $\min(a_{r_1,c_1}, a_{r_2,c_2}) \gt \max(a_{r_1,c_2}, a_{r_2,c_1})$
- $\min(a_{r_2,c_1}, a_{r_1,c_2}) \gt \max(a_{r_1,c_1}, a_{r_2,c_2})$

The *quality* of the candle placement is defined as the number of sweet rectangles.

Find the quality of the initial cake and then process $Q$ queries. In each query, we replace the candle currently placed in a row $x$ and a column $y$ by a new candle with height $h$. The queries are not independent, i.e. each such change affects all subsequent queries. After each query, find the quality of the current candle placement.

It is guaranteed that initially and after each query, the heights of the candles are pairwise distinct.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $a_{i,1}, a_{i,2}, \ldots, a_{i,M}$.
- The next line contains a single integer $Q$.
- Each of the next $Q$ lines contains three space-separated integers $x$, $y$ and $h$ describing a query.

### Output
First, print a line containing a single integer ― the quality of the initial placement. Then, for each query, print a line containing a single integer ― the quality of the placement after this query.

### Constraints
- $2 \le N, M \le 1,000$
- $0 \le Q \le 10,000$
- $0 \le a_{i,j} \le 10^9$ for each valid $i$ and $j$
- $1 \le x \le N$
- $1 \le y \le M$
- $0 \le h \le 10^9$

### Example Input
```
3 3
3 5 1
2 9 6
8 7 4
4
2 2 0
2 1 10
3 2 11
1 3 9
```

### Example Output
```
3
4
3
4
6
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>