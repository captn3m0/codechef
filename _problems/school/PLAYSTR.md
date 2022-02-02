---
{"category_name":"school","problem_code":"PLAYSTR","problem_name":"Playing with Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n5\n11000\n01001\n3\n110\n001","output":"YES\nNO","explanation":"**Example case 1:** Chef can perform one operation with $(i, j) = (1, 5)$. Then, $S$ will be \u002201001\u0022, which is equal to $R$.\n\n**Example case 2:** There is no sequence of operations which would make $S$ equal to $R$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/XcFrOoAiENk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":"","date_added":"12-07-2019","tags":{"0":"cook108","1":"ezio_26","2":"frequency","3":"math","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"Frequency Array","editorial_url":"https://discuss.codechef.com/problems/PLAYSTR","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PLAYSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/PLAYSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/PLAYSTR.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/PLAYSTR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/PLAYSTR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/PLAYSTR.pdf) as well.

Chef usually likes to play cricket, but now, he is bored of playing it too much, so he is trying new games with strings. Chef's friend Dustin gave him binary strings $S$ and $R$, each with length $N$, and told him to make them identical. However, unlike Dustin, Chef does not have any superpower and Dustin lets Chef perform only operations of one type: choose any pair of integers $(i, j)$ such that $1 \le i, j \le N$ and swap the $i$-th and $j$-th character of $S$. He may perform any number of operations (including zero).

For Chef, this is much harder than cricket and he is asking for your help. Tell him whether it is possible to change the string $S$ to the target string $R$ only using operations of the given type.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a binary string $S$.
- The third line contains a binary string $R$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to change $S$ to $R$ or `"NO"` if it is impossible (without quotes).

### Constraints
- $1 \le T \le 400$
- $1 \le N \le 100$
- $|S| = |R| = N$
- $S$ and $R$ will consist of only '1' and '0'

### Example Input
```
2
5
11000
01001
3
110
001
```

### Example Output
```
YES
NO
```

### Explanation
**Example case 1:** Chef can perform one operation with $(i, j) = (1, 5)$. Then, $S$ will be "01001", which is equal to $R$.

**Example case 2:** There is no sequence of operations which would make $S$ equal to $R$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>