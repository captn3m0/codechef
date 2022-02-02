---
{"category_name":"easy","problem_code":"CCHEAVEN","problem_name":"Chef in Heaven ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n10\r\n3\r\n001\r\n4\r\n0100","output":"YES\r\nNO\r\nYES","explanation":"**Test case 1:** If Chef lives for the complete $2$ years, he will have a total of $1$ good year which is $\\frac{1 * 100}{2} = 50\\%$ of his life, and hence he will go to heaven.\r\n\r\n**Test case 2:** There\u0027s no way Chef can go to heaven.\r\n\r\n**Test case 3:** If Chef lives for $2$ years, he will have a total of $1$ good year which is $\\frac{1 * 100}{2} = 50\\%$ of his life, and hence he will go to heaven.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/_VDdZ963abQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"2-04-2021","tags":{"0":"daanish_adm","1":"ltime95","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CCHEAVEN","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCHEAVEN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
When Chef was born, his parents took him to the famous monk Doctor Strange to know whether he will land himself in heaven after his life or not. According to Strange, Chef will live for $L$ years in total. If he wants to go to heaven, he must spend at least $50\%$ of his life years doing good deeds. He also shows them his future using a string $S$ of length $L$ where $S_i = 0$ means the $i$-th year will be counted as bad as per the rule books of heaven and $S_i = 1$ means the $i$-th year will be counted as good.

Also, Strange can use his special powers to make Chef end his life earlier than that planned by god, i.e, he can choose some $L'$ ($1\leq L'\leq L$) and make him live for only $L' $ years. Strange wants Chef to succeed, so if there is any choice of $L'$ that allows Chef to go to heaven, he will do so.

Tell whether Chef can go to heaven.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains two lines of input.
- The first line contains a single integer $L$.
- The second line contains a string $S$ of length $L$, consisting of symbols `0` and `1`.

###Output
For each test case, output the answer in a single line: "YES" if Chef can go to heaven and "NO" if not (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq L \leq 10^5$
- The sum of $L$ over all tests does not exceed $10^6$

###Subtasks

**Subtask #1 (100 points):** original constraints

###Sample Input:
```
3
2
10
3
001
4
0100
```

###Sample Output
```
YES
NO
YES
```
	
###Explanation
**Test case 1:** If Chef lives for the complete $2$ years, he will have a total of $1$ good year which is $\frac{1 * 100}{2} = 50\%$ of his life, and hence he will go to heaven.

**Test case 2:** There's no way Chef can go to heaven.

**Test case 3:** If Chef lives for $2$ years, he will have a total of $1$ good year which is $\frac{1 * 100}{2} = 50\%$ of his life, and hence he will go to heaven.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>