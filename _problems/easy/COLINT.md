---
{"category_name":"easy","problem_code":"COLINT","problem_name":"Coloring Intervals","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"13-12-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLINT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $n$ intervals on the $X$ axis. Each interval $i$ is specified by its ends $[L_i, R_i]$. You want to color each interval either blue or yellow. After coloring all the intervals, the $X$ axis will will have $4$ colors:
- White, the part of $X$ axis contained in no interval
- Blue, the part of $X$ axis contained in atleast one blue colored interval and no yellow colored interval.
- Yellow, the part of $X$ axis contained in atleast one yellow colored interval and no blue colored interval.
- Green, the part of $X$ axis contained in at least one blue colored interval and at least one yellow colored interval.

You want to color the intervals so that the total length of the part colored green is maximized. If there are multiple ways to color which maximize the green part, you can output any of them.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains $n$, the number of intervals.
- The $i^{\text{th}}$ of the next $n$ lines contains two integers $L_i$ and $R_i$ describing the $i^{\text{th}}$ interval.

###Output:
For each testcase, output a single string on a new line, whose $i^{\text{th}}$ character is $0$ if you color the $i^{\text{th}}$ interval blue, and $1$ if you color it yellow.

###Constraints 
- $ 1 \leq T \leq 10^5 $
- $ 1 \leq n \leq 10^5 $
- The sum of $n$ over all testcases doesn't exceed $10^5$.
- $ 1 \leq L_i \leq R_i \leq 10^9 $ for al $ 1 \leq i \leq n$.

###Sample Input:
    1
    3
    3 7
    2 5
    6 9

###Sample Output:
    100
	
###Explanation:
The intervals are $[3, 7]$, $[2, 5]$, $[6, 9]$. It is optimal to color them in yellow, blue and blue respectively. In this coloring:
- $[2, 3) \cup (7, 9]$ is colored blue.
- $(5, 6)$ is colored yellow.
- $[3, 5] \cup [6, 7]$ is colored green, with a total length of $(5 - 3) + (7 - 6) = 3$.
- Rest of the $X$ axis is colored white.

Please note that colors at the endpoints of the intervals don't matter when computing the lengths, and we can ignore them. Open and closed intervals have been used in the explanation section only for clarity, and it doesn't matter whether they are open or closed.

Note that `011` is also a valid output.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>