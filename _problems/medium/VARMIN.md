---
{"category_name":"medium","problem_code":"VARMIN","problem_name":"Minimum Variance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"26-11-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VARMIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $n$ sets $S_1, S_2, \ldots, S_n$. 

For each $i$, you want to choose $x_i \in S_i$, such that the variance of the  multiset $\{x_1, x_2, \ldots, x_n\}$ is minimized.

The variance of a multiset $\{x_1, x_2, \ldots, x_n\}$ is defined as $\sigma^2 = \displaystyle  \dfrac{\sum_{i=1}^{n} (x_i - \mu)^2}{n} $, where $\mu$ is the mean, which equals $\displaystyle \dfrac{ \sum_{i=1}^{n}x_i}{n}$.

Say the minimum possible variance is $R$. Print $n^2 \times R$. It can be proved that $n^2 R$ is always an integer.

### Input
- The first line contains $n$, the number of sets.
- $i^{\text{th}} $ of the next $n$ lines contain an integer $|S_i|$ followed by $|S_i|$ distinct integers denoting the elements of set $S_i$.

### Output
In the only line, print a single integer denoting the product of $n^2$ and the minimum possible variance of $\{x_1, x_2, \ldots, x_n\}$

### Constraints 
- $1 \le n \le 50,000$
- $ 1 \le |S_i| \le 50,000$ for all valid $i$.
- $1 \le \displaystyle \sum_{i=1}^{n} |S_i| \le 50,000$
- All elements in a single set are distinct.
- The elements of all the sets are between $1$ and $50,000$ inclusive

### Example Input 1
```
2
3 3 7 1
2 5 11
```

### Example Output 1
```
4
```

### Example Input 2
```
2
2 2 5
1 5
```

### Example Output 2
```
0
```

### Explanation
**Example case 1:** You should choose $x_1 = 3$ from $S_1$ and $x_2 = 5$ from $S_2$, the mean is $4$ and the variance is $\dfrac{(3-4)^2 + (5 - 4)^2}{2} = 1$. Hence, the output should be $n^2 \times 1 = 4$. 

**Example case 2:** Choosing $x_1 = x_2 = 5$ gives a variance of $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>