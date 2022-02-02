---
{"category_name":"easy","problem_code":"STRSPL","problem_name":"4 - Palindrome and antipalindrome","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"6-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STRSPL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Say that a string is ***binary*** if it consists solely of the symbols $0$ and $1$ (the empty string is binary too). For a binary string $s$ let's define two functions:

- The function $rev(s)$ reverses the string $s$. For example, $rev(010111)=111010$ and $rev(01)=10$.
- The string $flip(s)$ changes each character in $s$ from $0$ to $1$ or from $1$ to $0$. For example, $flip(010111)=101000$ and $flip(11)=00$.

If $s = rev(s)$ then we say that $s$ is a ***palindrome***. If $s=rev(flip(s))$ then we say that $s$ is an ***antipalindrome***.

Given a binary string $s=s_1s_2\ldots s_{|s|}$, divide it into a palindrome and an antipalindrome. Formally, you should find two sequences $i_1, i_2, \ldots, i_k$ and $j_1, j_2, \ldots, j_m$, such that:

- $k,m\ge 0$
- $|s| = k + m$
- All indices $i_1, i_2, \ldots, i_k, j_1, j_2, \ldots, j_m$ are distinct integers satisfying $1 \leq i_x,j_x\leq |s|$.
- $i_1 < i_2 < \ldots < i_k$ and $j_1 < j_2 < \ldots < j_m$
- The string $s_{i_1} s_{i_2} \ldots s_{i_k}$ is a palindrome.
- The string $s_{j_1} s_{j_2} \ldots s_{j_m}$ is an antipalindrome.

###Input:

The first line contains a single integer, $t$ - the number of test cases. The next $t$ lines describe test cases.

The only line for each test case contains a binary string $s$.

###Output:

In the first line for each test case, print two integers $k$ and $m$.

In the second line for each test case, print $k$ integers $i_1, i_2, \ldots, i_k$.

In the third line for each test case, print $m$ integers $j_1, j_2, \ldots, j_m$.

All required conditions should be satisfied.

It can be shown that an answer always exists. If there exist multiple answers you can print any.

###Constraints

- $1 \leq t \leq 10^5$
- $1 \leq |s| \leq 100\,000$
- the sum of lengths of all strings does not exceed $300\,000$

###Subtasks

**Subtask #1 (30 points):**
- $t \leq 1000$
- $|s| \leq 10$

**Subtask #2 (70 points):** original constraints

###Sample Input:

```
4
0
10111001011
1100100001
11000111
```

###Sample Output:
```
1 0
1

5 6
1 4 6 8 11
2 3 5 7 9 10
6 4
1 3 4 7 8 10
2 5 6 9
6 2
1 2 4 5 7 8
3 6
```

###Explanation:

In the first test case, the string $0$ is a palindrome and the empty string is an antipalindrome.

In the second test case, we can use indices $[1, 4, 6, 8, 11]$ to create the palindrome $s_1s_4s_6s_8s_{11}=11011$ and indices $[2, 3, 5, 7, 9, 10]$ to create the antipalindrome $s_2s_3s_5s_7s_9s_{10}=011001$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>