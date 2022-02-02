---
{"languages_supported":{"0":"NA"},"title":"MUFFINS2","category":"NA","old_version":true,"problem_code":"MUFFINS2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Now that Chef has streamlined his cupcake baking procedure,
he's turning his attention toward frosting the cupcakes.
He recently purchased a machine that produces frosting.
Each cupcake requires one unit of frosting, and the frosting machine
requires K<sup>2</sup> units of energy to produce K units of frosting
in one minute (K need not be an integer).
Cupcakes arrive in batches, once per minute, needing frosting.
The cupcakes must be frosted within a minute of when they arrive.
The frosting machine also has a reserve unit, so it can produce extra frosting
to be used later.
The reserve unit has a capacity of S units of frosting, and is initially empty.
The machine may produce more units of frosting than is currently demanded, and
the excess will be added to the reserve unit.
Or, the machine can produce fewer units of frosting than is currently demanded,
drawing the remainder of what is needed from the reserve.
At all times the reserve unit must have between 0 and S units of frosting.</p>
<p>
Chef has a schedule ahead of time of exactly how many cupcakes
will arrive each minute needing frosting, and can create a frosting production schedule for the machine that will optimize its energy usage.  The machine may produce a different amount of frosting each minute.
Given the cupcake schedule, calculate the minimum energy needed to frost all
the cupcakes divided by the total number of cupcakes.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case begins with 2 integers N and S on a line, representing
the number of minutes the machine will operate, and the capacity of the
storage unit, respectively.
Following is a line with N space-separated integers C<sub>0</sub>...C<sub>N-1</sub>,
where C<sub>i</sub> is the number of cupcakes arriving at time i.</p>

<h3>Output</h3>
<p>For each test case, output on a single line the minimum total energy consumption
of the machine divided by the total number of cupcakes, rounded to 5 places after the decimal point.</p>

<h3>Sample input</h3>
<pre>4
5 0
1 2 3 4 5
5 1
0 0 0 0 2
5 2
0 0 0 0 2
5 2
2 0 0 0 0
</pre>

<h3>Sample output</h3>
<pre>3.66667
0.62500
0.40000
2.00000
</pre>

<h3>Constraints</h3>
T&lt;50<br />
1≤N≤30000<br />
0≤S≤30000<br />
0≤C<sub>i</sub>≤20000<br />
At least one C<sub>i</sub> will be non-zero<br />    