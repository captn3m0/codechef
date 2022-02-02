---
{"category_name":"easy","problem_code":"CHANDF","problem_name":"Chef and Bitwise Product","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n7 12 4 17\r\n7 12 0 8","output":"15\r\n7","explanation":"**Example case 1**: Here, $Z = 15$ maximises the function, since $F(7,12,15) = 84$. It is impossible to reach $F \\gt 84$ with any $Z$ in the given range.\r\n\r\n**Example case 2**: The smallest $Z$ which maximises $F$ is $Z = 7$, and the value of $F$ for this $Z$ is $28$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"harshil21","problem_tester":null,"date_added":"30-03-2020","tags":{"0":"bitwise","1":"brute","2":"easy","3":"harshil21","4":"harshil21","5":"may20"},"problem_difficulty_level":"Easy-Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/CHANDF","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHANDF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/CHANDF.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/CHANDF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/CHANDF.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/CHANDF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/CHANDF.pdf) as well.

Chef got interested in bits and wanted to learn about them, so his friend Pintu gave him a special function $F(X,Y,Z) = (X \wedge Z) \cdot (Y \wedge Z)$, where $\wedge$ is the [bitwise AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND) operator and $X, Y, Z$ are non-negative integers.

Pintu wants Chef to maximise the function $F(X,Y,Z)$ for given $X$ and $Y$ by choosing an appropriate $Z$. However, to make it interesting, Pintu also gave Chef limits $L$ and $R$ for $Z$. In other words, he wants Chef to find a non-negative integer $Z$ ($L \le Z \le R$) such that $F(X,Y,Z) = \mathrm{max}_{L \le k \le R} \left( F(X,Y,k) \right)$. If there is more than one such value of $Z$, he should find the smallest one in the range $[L, R]$.

Since Chef is busy cooking in the kitchen, he needs you to help him solve this problem.

Note: $X$, $Y$, $L$ and $R$ are chosen in such a way that $\mathrm{max}_{L \le k \le R} \left( F(X,Y,k) \right)$ never exceeds $2^{62}$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $X$, $Y$, $L$ and $R$.

### Output
For each test case, print a single line containing one integer ― the smallest value of $Z$ in the given range that maximises $F$.

### Constraints
- $1 \le T \le 10^5$
- $0 \le X,Y \le 10^{12}$
- $0 \le L \le R \le 10^{12}$

### Subtasks
**Subtask #1 (15 points)**:
- $L = 0$
- $R \ge 2 \cdot \mathrm{max}(X,Y)$

**Subtask #2 (25 points)**: $L = 0$

**Subtask #3 (60 points)**: original constraints

### Example Input
```
2
7 12 4 17
7 12 0 8
```

### Example Output
```
15
7
```

### Explanation
**Example case 1**: Here, $Z = 15$ maximises the function, since $F(7,12,15) = 84$. It is impossible to reach $F \gt 84$ with any $Z$ in the given range.

**Example case 2**: The smallest $Z$ which maximises $F$ is $Z = 7$, and the value of $F$ for this $Z$ is $28$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>