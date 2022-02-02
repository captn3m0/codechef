---
{"category_name":"challenge","problem_code":"INTERLEA","problem_name":"(Challenge) Interleaving Strings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"5-03-2019","tags":{"0":"admin3"},"time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef has $N$ decimal strings $S_1, S_2, \ldots, S_N$ with him (that is, each of these strings contains only characters '0' through '9'). The characters in all strings are indexed starting from $1$. Chef wants to form a single long string $W$ by *interleaving* all these strings.

A string $W$ is said to be formed by interleaving $S_1, S_2, \ldots, S_N$ if the characters of $W$ can be partitioned into $N$ subsequences $T_1, T_2, \ldots, T_N$ such that for each valid $i$, $T_i$ is identical to the string $S_i$. Formally, for each valid $i$, the subsequence $T_i$ must have length $|S_i|$; let's denote $T_i = (T_{i, 1}, T_{i, 2}, \ldots, T_{i, |S_i|})$, where $1 \le T_{i, j} \le N$ and $T_{i, j} \lt T_{i, j+1}$ for each valid $j$. Each integer between $1$ and $|W| = |S_1| + |S_2| + \ldots + |S_N|$ inclusive must occur in exactly one of these subsequences, and for each valid $i$ and $j$, the $T_{i, j}$-th character of $W$ must be identical to the $j$-th character of $S_i$. For example, if $S_1$ is "123", $S_2$ is "456" and $S_3$ is "789", then the strings "124758963" and "123456789" are formed by interleaving these strings, but "123456798" is not.

The *cost* of the interleaved string $W$ is defined as $\sum_{i=2}^{|W|} |W_i - W_{i-1}|^2$, where $W_i$ denotes the integer represented by the $i$-th character of $W$. For example, if $W$ is "124", then its cost is $|2 - 1|^2 + |4 - 2|^2 = 1 + 4 = 5$.

Chef wants you to find an interleaved string $W$. The cost of this string should be as low as possible.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $S_i$.

### Output
- Print a single line containing $|W| = |S_1| + |S_2| + \ldots + |S_N|$ space-separated integers. For each valid $i$, the $i$-th of these integers (let's denote it by $x$) should denote that the $i$-th character of your interleaved string comes from the string $S_x$.
- Your output will be considered valid if for each $i$ ($1 \le i \le N$), your output contains the integer $i$ exactly $|S_i|$ times.

### Constraints
- $N = 10,000$
- $|S_i| = 100$ for each valid $i$
- $S_1, S_2, \ldots, S_N$ contain only decimal digits, i.e. characters '0' through '9'

### Scoring
The score of each test case (and therefore each test file) is the cost of the string $W$ described by your output, i.e. $\sum_{i=2}^{|W|} |W_i - W_{i-1}|^2$. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

If your output is invalid, the verdict of your submission will be Wrong Answer.

There are twenty test files - ten of each type described below. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files, two for each of the types described below. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files.

### Example Input
```
3
123
456
789
```

### Example Output
```
1 1 2 3 2 3 3 2 1
```

### Explanation
The output corresponds to the string "124758963". The score for this test file would be the cost of this string, which is $46$.

### Test Generation Process
There are two types of test files.

**Type 1**: Each character of each string is chosen uniformly randomly from the set {'0', '1', ..., '9'}.

**Type 2**: Each character of each string is chosen randomly from the set {'0', '1', ..., '9'}. The probability of '0' being chosen is $0.4$, the probability of '1' being chosen is also $0.4$ and the probability of each of the remaining 8 characters being chosen is $0.025$.
