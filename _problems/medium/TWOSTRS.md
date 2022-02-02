---
{"category_name":"medium","problem_code":"TWOSTRS","problem_name":"Buying a New String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\nhitech\r\ncodechef\r\n3\r\nchef 3\r\ncode 1\r\neche 5","output":13,"explanation":"**Example case 1:** Chef can buy the string $C$ = \u0022tech\u0022 + \u0022echef\u0022 = \u0022techechef\u0022. In this string $C$, one substring is \u0022chef\u0022, there are no substrings \u0022code\u0022 and two substrings are \u0022eche\u0022. Chef\u0027s pleasure in this case is $1 \\cdot 3 + 0 \\cdot 1 + 2 \\cdot 5 = 13$, which is the maximum possible pleasure.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"sharepo","problem_tester":null,"date_added":"15-01-2020","tags":{"0":"aho","1":"may20","2":"medium","3":"prefix","4":"sharepo","5":"sharepo","6":"trie"},"problem_difficulty_level":"Medium","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/TWOSTRS","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWOSTRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/TWOSTRS.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/TWOSTRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/TWOSTRS.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/TWOSTRS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/TWOSTRS.pdf) as well.

In Chefland, each citizen has their own personal string. Chef is no exception. Recently, his string broke and he went to a shop to get a new one.

There are two strings in the shop: $A$ and $B$. Chef may choose any substring $A_s$ of $A$ (possibly empty) and any substring $B_s$ of $B$ (also possibly empty). Then, the shop assistant cuts these substrings out and sells a single string $C = A_s + B_s$ (here, $+$ denotes string concatenation) to Chef. For example, if $A$ is "aba" and $B$ is "cde", then some of the strings Chef can buy are "ba", "bac", "bacd", "ae", "d", "acde", "aba", "cde" or "abacde".

Chef has seen a lot of strings in his life and he liked exactly $N$ of them (numbered $1$ through $N$). For each valid $i$, the $i$-th of these strings is denoted by $S_i$ and according to Chef, it has a *beauty* $b_i$. Let's denote the number of substrings of $C$ that are equal to $S_i$ by $cnt_i(C)$. If Chef buys a string $C$, he says that the *pleasure* he gets from this string is $\sum_{i=1}^N cnt_i(C) \cdot b_i$.

What is the maximum possible pleasure Chef can get from a string he buys in the shop?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $A$.
- The second line contains a single string $B$.
- The third line contains a single integer $N$.
- The following $N$ lines describe Chef's favourite strings. For each valid $i$, the $i$-th of these lines contains a string $S_i$, followed by a space and an integer $b_i$.

### Output
For each test case, print a single line containing one integer ― the maximum pleasure.

### Constraints
- $1 \le T \le 10$
- $1 \le |A|, |B| \le 10^3$
- $1 \le N \le 10^4$
- $1 \le |S_i| \le 26$ for each valid $i$
- $1 \le b_i \le 10^5$ for each valid $i$
- $A, B, S_1, S_2, \ldots, S_N$ contain only lowercase English letters
- $S_1, S_2, \ldots, S_N$ are pairwise distinct
- the sum of $|A|$ over all test cases does not exceed $2 \cdot 10^3$
- the sum of $|B|$ over all test cases does not exceed $2 \cdot 10^3$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^4$

### Subtasks
**Subtask #1 (20 points, time limit 2 seconds):** $|A|, |B|, N \le 100$

**Subtask #2 (30 points, time limit 1 second):**
- the sum of $|A|$ over all test cases does not exceed $500$
- the sum of $|B|$ over all test cases does not exceed $500$

**Subtask #3 (50 points, time limit 1 second):** original constraints

### Example Input
```
1
hitech
codechef
3
chef 3
code 1
eche 5
```

### Example Output
```
13
```

### Explanation
**Example case 1:** Chef can buy the string $C$ = "tech" + "echef" = "techechef". In this string $C$, one substring is "chef", there are no substrings "code" and two substrings are "eche". Chef's pleasure in this case is $1 \cdot 3 + 0 \cdot 1 + 2 \cdot 5 = 13$, which is the maximum possible pleasure.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>