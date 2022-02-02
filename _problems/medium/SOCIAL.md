---
{"languages_supported":{"0":"NA"},"title":"SOCIAL","category":"NA","old_version":true,"problem_code":"SOCIAL","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The chef is having a dinner party.
He has N chairs and has invited N guests.
The chef knows that if the guests are left to their own devices,
they tend to sit in the same chairs and socialize with the same people all night.
To prevent this, the chef has developed a plan to help people socialize.
He will assign each chair a follow-up chair.
At predetermined intervals during the party, the chef will ring a bell, instructing all guests
to move from their current chair to its follow-up chair.</p>
<p>The chef will assign follow-up chairs randomly, with the restriction that no chair will
be its own follow-up chair, and no two chairs will have the same follow-up chair.  That is, the chef randomly chooses one arrangement out of all assignments satisfying the two conditions.
The chef wonders, after a certain number of ringings of the bell,
what the expected number of guests who will be back in their original chairs
will be.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case consists of a single line with 2 integers N and R,
the number of chairs and number of ringings, respectively.</p>

<h3>Output</h3>
<p>For each test case, output on a single line the expected number
of guests who will be back in their original seats after exactly R
ringings, rounded to 5 decimal places.</p>

<h3>Sample Input</h3>
<pre>4
2 1
2 2
4 2
5 3
</pre>

<h3>Sample Output</h3>
<pre>0.00000
2.00000
1.33333
1.36364
</pre>

<h3>Constraints</h3>
T≤300<br />
2≤N≤50<br />
1≤R≤1000000<br />    