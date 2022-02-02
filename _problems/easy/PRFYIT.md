---
{"category_name":"easy","problem_code":"PRFYIT","problem_name":"Purify It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n010111101\r\n1011100001011101\r\n0110\r\n111111","output":"2\r\n3\r\n0\r\n0","explanation":"**Example case 1:** We can delete the first and third character of our string. There is no way to make the string pure by deleting only one character.\r\n\r\n**Example case 3:** The given string is already pure, so the answer is zero.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/tBtSJCngUR4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":"","date_added":"15-12-2019","tags":{"0":"brute","1":"cook113","2":"dynamic","3":"easy","4":"kmaaszraa","5":"kmaaszraa"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PRFYIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRFYIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/PRFYIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/PRFYIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/PRFYIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/PRFYIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/PRFYIT.pdf) as well.

We say that a binary string (a string containing only characters '0' and '1') is *pure* if it does not contain either of the strings "0101" or "1010" as a subsequence.

Recall that string T is a subsequence of string S if we can delete some of the letters of S (possibly none) such that the resulting string will become T.

You are given a binary string $S$ with length $N$. We want to make this string pure by deleting some (possibly zero) characters from it. What is the minimum number of characters we have to delete?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer — the minimum number of characters we have to delete from $S$.

### Constraints
- $1 \le T \le 40$
- $1 \le N \le 1,000$
- $S$ contains only characters '0' and '1'

### Example Input
```
4
010111101
1011100001011101
0110
111111
```

### Example Output
```
2
3
0
0
```

### Explanation
**Example case 1:** We can delete the first and third character of our string. There is no way to make the string pure by deleting only one character.

**Example case 3:** The given string is already pure, so the answer is zero.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>